<?php

//アイキャッチ画像を表示
add_theme_support('post-thumbnails');
set_post_thumbnail_size(250, 250, true);
add_image_size('size400', 400, 400, true);
add_image_size('size672x560', 672, 560, true);
add_image_size('ogp_thumbnail', 600, 314, true);

// 投稿記事一覧にアイキャッチ画像を表示
function manage_posts_columns($columns) {
	$columns['thumbnail'] = __('Thumbnail');
	return $columns;
}
function add_column($column_name, $post_id) {
	if ( 'thumbnail' == $column_name) {
		$thum = get_the_post_thumbnail($post_id, array(50,50), 'size100');
	}
	if ( isset($thum) && $thum ) {
		echo $thum;
	} else {
		echo __('None');
	}
}
add_filter( 'manage_posts_columns', 'manage_posts_columns' );
add_action( 'manage_posts_custom_column', 'add_column', 10, 2 );




// パンくずリストmicrodata
function my_bread_crumb($output, $args) {
    if ($args['type'] == 'list') {
        /* li element spacing fix */
        $output = str_replace(array("\t","\n"), '', $output);
 
        /* itemscope="itemscope" */
        $output = preg_replace('|<li\s+(.*?)>|mi','<li ${1} itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">',$output);
 
        /* current page is not itemscope="itemscope" */
        $output = preg_replace('|<li\s+class="(.*?current.*?)".*?>|mi','<li class="${1}">',$output);
 
        /* itemprop="url" */
        /* itemprop="title" */
        $output = preg_replace('|<a\s+(.*?)>|mi','<a ${1} itemprop="url"><span itemprop="title">',$output);
        $output = str_replace('</a>','</span></a>',$output);
    }
    return $output;
}
 
add_filter('bread_crumb', 'my_bread_crumb',10,2);



/* 管理画面にリンクを追加 */	
add_filter('pre_option_link_manager_enabled', '__return_true');



/* RSSfeedのリンクをhead内に出力 */
add_theme_support('automatic-feed-links');

/* remove jetpack open graph tags*/
remove_action('wp_head','jetpack_og_tags');

/* head内のwlwmanifest Windows Live Write を削除 */
remove_action('wp_head', 'wlwmanifest_link');
/* head内のジェネレーターを削除 */
remove_action('wp_head', 'wp_generator');

/* head内インラインスタイル削除 */
function remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'remove_recent_comments_style' );




// RSSにアイキャッチを出力（抜粋を入れると適用されない
function rss_post_thumbnail($content) {
global $post;
if(has_post_thumbnail($post->ID)) {
$content = '<p>' . get_the_post_thumbnail($post->ID) .
'</p>' . $content;
}
return $content;
}
add_filter('the_excerpt_rss', 'rss_post_thumbnail');
add_filter('the_content_feed', 'rss_post_thumbnail');

//[…]を...続きを読むリンクに修正（抜粋を入れると適用されない
function new_excerpt_more($post) {
    return '…<a href="'. get_permalink($post->ID) . '">' . 'この記事を読む>>>' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');



/* 投稿画面にCSSを適用 */
add_editor_style();




/* 普通の投稿は、posts_per_pageを５に */
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
 
    if ( $query->is_home() ) {
        $query->set( 'posts_per_page', '5' );
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );




/* ブログサイドバーウィジェット */
register_sidebars(4, array(
        'name' => 'blogWidget%d',
        'before_widget' => '<div class="sideItem %2$s" id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h1 class="widgetTitle">',
        'after_title' => '</h1>'
        ));



/* search時に固定ページを除外 */
function SearchFilter($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
}
add_filter('pre_get_posts','SearchFilter');


/* 最新の記事IDを取得する、カテゴリ指定も可能 */
function return_latest_id($cat_id=null) {
    global $wpdb;
 
    if(empty($cat_id)) {
        // 最新記事idの取得
        $row = $wpdb->get_row("SELECT ID FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' ORDER BY post_date DESC");
    } else {
        // カテゴリを指定した最新記事idの取得
        $cat_id = intval($cat_id);
        $row = $wpdb->get_row("SELECT p.ID FROM $wpdb->posts p LEFT JOIN $wpdb->term_relationships r ON p.ID=r.object_id WHERE p.post_type = 'post' AND p.post_status = 'publish' AND r.term_taxonomy_id = '$cat_id' ORDER BY p.post_date DESC");
    }
    return !empty( $row ) ? $row->ID : '0';
}


/* コメントリストのカスタマイズ */
function rinare_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		<div id="comment-<?php comment_ID(); ?>" class="clearfix">
			
			<!-- 名前とリンク -->
			<div class="comment-author vcard">
				<?php printf(__('<cite class="fn">%s</cite> <span class="says">より</span>'), get_comment_author_link()) ?>
			</div>
			
			<!-- if認証前 -->
			<?php if ($comment->comment_approved == '0') : ?>
				<em><?php _e('Your comment is awaiting moderation.') ?></em><br />
			<?php endif; ?>
				
			<!-- アバター -->	
			<div class="authorImg">
				<?php echo get_avatar($comment,$size='60',$default=get_template_directory_uri().'/images/guest'.(mt_rand(1,5)).'.png' ); ?>
			</div>
			
			<!-- コメント文 -->
			<div class="textArea">			
				<!-- メタデータ投稿時間、その他 -->
				<div class="comment-meta commentmetadata">
					<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
					<?php printf(__('%1$s at %2$s'), get_comment_date('Y.n.j(D)'),  get_comment_time('G:i')) ?></a>
					<?php edit_comment_link(__('(▶Edit)'),'  ','') ?>
				</div>
				
				<div class="text"><?php comment_text() ?></div>
			</div>
			
			<!-- 返信用リンク -->
			<div class="reply"><?php comment_reply_link(array_merge( $args, array('reply_text' => '▶このコメントに返信', 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></div>
		
		</div>
	<?php
}     
        
function rinare_ping($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
        <div id="comment-<?php comment_ID(); ?>">
            <div class="comment-author vcard">
                <?php printf(__('%s'), get_comment_author_link()) ?>
            </div>
            <div class="comment-meta">
                <?php printf(__('%1$s'), get_comment_date('Y.n.j'),  get_comment_time('G:i')) ?><?php edit_comment_link(__('(▶Edit)'),'  ','') ?>
            </div>
            <div class="pingtext">
            <?php echo mb_substr(strip_tags(get_comment_text()), 0, 100); ?>
            </div>
           
        </div>
<?php }
	

/*
 * pagination
 *
 * @param $_all_page_num 全ページ数
 * @param $_show_item_range 表示するページネーション数
 *
 * <<first <prev 5 6 ⑦ 8 9 Next> Last>>
 * このようなページネーションだった場合、5 6 もしくは 8 9 の部分が
 * $_show_item_range数となる
 *
 */
function pagination($_all_page_num = '', $_show_item_range = 4) {
    // $_show_item_range数から何ページ分ページネーションを作成するか計算する
    $showitems = ($_show_item_range * 2) + 1;

    // 現在のページ数(変数名変更不可)
    global $paged;

    // 現在のページ数がなければ1ページ目とする
    if (empty($paged)) {
        $paged = 1;
    }

    // ページ数の指定が無かった場合
    if ($_all_page_num == '') {
        global $wp_query;

        // 記事数を取得する
        $_all_page_num = $wp_query->max_num_pages;

        // 記事数が取得できなかった場合
        if (!$_all_page_num) {
            // 総ページ数は1とする
            $_all_page_num = 1;
        }
    }

    // ページ数が2ページ以上の場合にページネーションを作成する
    if ($_all_page_num > 1) {
        // Page X of Y の表示
        echo "<div class=\"pagination\"><span class=\"pages\">".$paged."/".$_all_page_num."</span> Newer ";

        // 先頭記事に戻るボタン
        if ($paged     > 2
        &&  $paged     > $_show_item_range + 1
        &&  $showitems < $_all_page_num) {
            echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
        }

        // 一つ前に戻るボタン
        if ($paged     > 1
        &&  $showitems < $_all_page_num) {
            echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
        }

        // 現在のページと、左右$_show_item_range分のボタン
        for ($i = 1; $i <= $_all_page_num; $i++)
        {
            if (!($i >= $paged + $_show_item_range + 1 || $i <= $paged - $_show_item_range - 1)
            ||  $_all_page_num <= $showitems) {
                // 現在のページ(クリックできない)
                if ($paged == $i) {
                    echo "<span class=\"current\">".$i."</span>";
                }
                // 左右$_show_item_range分のボタン
                else {
                    echo "<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
                }
            }
        }

        // 一つ進むボタン
        if ($paged     < $_all_page_num
        &&  $showitems < $_all_page_num) {
            echo "<a href=\"".get_pagenum_link($paged + 1)."\">&rsaquo;</a>";
        }

        // 最後尾に進むボタン
        if ($paged                     < $_all_page_num-1
        &&  $paged+$_show_item_range-1 < $_all_page_num
        &&  $showitems                 < $_all_page_num) {
            echo "<a href='".get_pagenum_link($_all_page_num)."'>&raquo;</a>";
        }

        echo " Older</div>\n";
    }
}


/* 投稿用のショートコードいろいろ */
function entry_horizon() {
	return '<div class="kanwa"><img src="'. get_template_directory_uri().'/images/horizon'.(rand(1,3)).'.png" width="550" height="89" alt=" "></div>';
}
add_shortcode('kanwa', 'entry_horizon');




/* 月別アーカイブをクールにするｗ */
function my_get_archives($args = '') {
  global $wpdb, $wp_locale;

  $defaults = array(
    'limit' => '',
    'format' => 'html', 'before' => '',
    'after' => '', 'show_post_count' => true,
    'echo' => 1,
    'yearorder' => 'DESC',  // 年の並び順
    'monthorder' => 'ASC',  // 月の並び順
  );

  $r = wp_parse_args( $args, $defaults );
  extract( $r, EXTR_SKIP );

  if ( '' != $limit ) {
    $limit = absint($limit);
    $limit = ' LIMIT '.$limit;
  }
  if ( (strtoupper($yearorder) != 'ASC') && (strtoupper($yearorder) != 'DESC') )
    $yearorder = 'DESC';
  if ( (strtoupper($monthorder) != 'ASC') && (strtoupper($monthorder) != 'DESC') )
    $monthorder = 'ASC';

  $where = apply_filters('getarchives_where', "WHERE post_type = 'post' AND post_status = 'publish'", $r );
  $join = apply_filters('getarchives_join', "", $r);

  $output = '';

  $query = "
    SELECT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, count(ID) as posts 
    FROM $wpdb->posts $join $where 
    GROUP BY YEAR(post_date), MONTH(post_date) 
    ORDER BY YEAR(post_date) $yearorder, MONTH(post_date) $monthorder 
    $limit";
  $key = md5($query);
  $cache = wp_cache_get( 'my_get_archives', 'general' );
  if ( !isset( $cache[ $key ] ) ) {
    $arcresults = $wpdb->get_results($query);
    $cache[ $key ] = $arcresults;
    wp_cache_add( 'my_get_archives', $cache, 'general' );
  } else {
    $arcresults = $cache[ $key ];
  }
  if ( $arcresults ) {
    $afterafter = $after;
    $outputs = $posts = array();
    foreach ( (array) $arcresults as $arcresult ) {
      $url = get_month_link( $arcresult->year, $arcresult->month );
      $text = $wp_locale->get_month($arcresult->month);
      if ( $show_post_count ){
        $after = ' ('.$arcresult->posts.')' . $afterafter;
        $posts[$arcresult->year] += $arcresult->posts;
      }
      $outputs[$arcresult->year] .= get_archives_link($url, $text, $format, $before, $after);
    }
    foreach( $outputs as $year => $output ) {
      $url = get_year_link($year);
      $text = sprintf('%d年', $year);
      if ($show_post_count)
        $after = ' ('.$posts[$year].')' . $afterafter;
      $outputs[$year] 
        = get_archives_link($url, $text, 'custom', '<li>' . $before, $after) 
        . '<ul class="sp_month">' . $outputs[$year] . '</ul></li>';
    }
    $output = implode('', $outputs);
  }
  
  if ( $echo )
    echo $output;
  else
    return $output;
}



/* スマフォ固定ページカレンダーリスト用ショートコード */
function sp_cal() {
	return my_get_archives();
}
add_shortcode('callist', 'sp_cal');


/* スマフォ固定ページカテゴリーリスト用ショートコード */
function sp_cate() {
	return wp_list_categories();
}
add_shortcode('catelist', 'sp_cate');





/* AdSenseのショートコードいろいろ */
function gAd_head() {
    return '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- リンあれヘッダ下 -->
			<ins class="adsbygoogle"
				style="display:inline-block;width:728px;height:90px"
				data-ad-client="ca-pub-7903067641116583"
				data-ad-slot="5317944373"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>'; 
}
add_shortcode('gAd_728', 'gAd_head');




function gAd_entry() {
	return '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- リンあれ記事下 -->
			<ins class="adsbygoogle"
				style="display:inline-block;width:336px;height:280px"
				data-ad-client="ca-pub-7903067641116583"
				data-ad-slot="5038742772"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>';
}
add_shortcode('gAd_336', 'gAd_entry');




function gAd_sideUpside() {
	return '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- リンあれサイド上 -->
			<ins class="adsbygoogle"
				style="display:inline-block;width:300px;height:250px"
				data-ad-client="ca-pub-7903067641116583"
				data-ad-slot="1305143173"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>';
}
add_shortcode('gAd_300', 'gAd_sideUpside');



function gAd_sideLarge() {
	return '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- リンあれサイド大 -->
		<ins class="adsbygoogle"
	     style="display:inline-block;width:300px;height:600px"
		 data-ad-client="ca-pub-7903067641116583"
		 data-ad-slot="8387490373"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>';
}
add_shortcode('gAd_300x600', 'gAd_sideLarge');



function gAd_kanren() {
	return '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- 関連PC300 -->
			<ins class="adsbygoogle"
				style="display:inline-block;width:300px;height:250px"
				data-ad-client="ca-pub-7903067641116583"
				data-ad-slot="8321310377"></ins>
			<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
			</script>';
}
add_shortcode('gAd_kanren300', 'gAd_kanren');






function rAd_w() {
	return '<!-- Rakuten Widget FROM HERE --><script type="text/javascript">rakuten_design="slide";rakuten_affiliateId="02160caf.824c40ba.08702c00.b75e49cf";rakuten_items="ranking";rakuten_genreId=0;rakuten_size="728x200";rakuten_target="_blank";rakuten_theme="gray";rakuten_border="on";rakuten_auto_mode="on";rakuten_genre_title="off";rakuten_recommend="on";</script><script type="text/javascript" src="https://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js"></script><!-- Rakuten Widget TO HERE -->';
}
add_shortcode('rAd_728', 'rAd_w');


function rAd_side() {
	return '<!-- Rakuten Widget FROM HERE --><script type="text/javascript">rakuten_design="slide";rakuten_affiliateId="02160caf.824c40ba.08702c00.b75e49cf";rakuten_items="ranking";rakuten_genreId=0;rakuten_size="300x250";rakuten_target="_blank";rakuten_theme="gray";rakuten_border="on";rakuten_auto_mode="on";rakuten_genre_title="off";rakuten_recommend="on";</script><script type="text/javascript" src="https://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js"></script><!-- Rakuten Widget TO HERE -->';
}
add_shortcode('rAd_300', 'rAd_side');


function rAd_top() {
	return '<!-- Rakuten Widget FROM HERE --><script type="text/javascript">rakuten_design="slide";rakuten_affiliateId="02160caf.824c40ba.08702c00.b75e49cf";rakuten_items="ranking";rakuten_genreId=0;rakuten_size="336x280";rakuten_target="_blank";rakuten_theme="gray";rakuten_border="on";rakuten_auto_mode="on";rakuten_genre_title="off";rakuten_recommend="on";</script><script type="text/javascript" src="https://xml.affiliate.rakuten.co.jp/widget/js/rakuten_widget.js"></script><!-- Rakuten Widget TO HERE -->';
}
add_shortcode('rAd_336', 'rAd_top');


function amazon_ROTATION() {
	return '<iframe src="https://rcm-fe.amazon-adsystem.com/e/cm?o=9&p=12&l=ez&f=ifr&linkID=9b4a023e43a9469d6afd34992e42d835&t=yucovin-22&tracking_id=yucovin-22" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>';
}
add_shortcode('amazon_r300', 'amazon_ROTATION');



function maxAd() {
	return '<!-- admax --><script src="//adm.shinobi.jp/s/67ff27d66a16f62daac5c9b8d7536d35"></script><!-- admax -->';
}
add_shortcode('maxAd_300', 'maxAd');


?>