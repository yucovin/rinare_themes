<div id="sidebar">
				
	<!-- adSideTop -->
	<div class="sideAd"><?php echo do_shortcode('[gAd_300]'); ?></div>
	<aside class="sideBox">
		<h1>お願いとプライバシーポリシー</h1>
		<p>●このブログのイラスト及び写真の無断転載や加工、二次配布を禁止します。文章を引用する場合はこのブログからの引用であることがわかるよう明記して下さい。引用を超えて転載する場合は上部contactから連絡して下さい。（紹介記事、それに類するものの場合はこれにあたりません。その場合のイラストの加工は原型が分かる程度でお願いします。）<br>●このブログの<a href="https://rinare.com/privacypolicy" title="プライバシーポリシー" target="_self">プライバシーポリシーはこちら</a>。</p>
	</aside>
	
	<aside class="sideBox">
		<h1>ギフトで応援</h1>
		<p>私（ゆこびん／佐久間にの）のアプリやブログで公開しているものがお役に立ったりなどして、私の活動を応援したいと思ってくださる方は<a href="https://www.amazon.co.jp/gp/registry/wishlist/QTN9CA27EO05/ref=cm_wl_list_o_1?sort=universal-price&view=null" title="ゆこびん応援Amazonギフトリスト" target="_blank">Amazonギフト</a>からお願いします。プログラミングやデザインのスキルアップのための書籍や絵を描くための道具、文房具など、快適な作業環境作りに使わせていただきます！<br>
			<a href="https://www.amazon.co.jp/gp/registry/wishlist/QTN9CA27EO05/ref=cm_wl_list_o_1?sort=universal-price&view=null" title="ゆこびん応援Amazonギフトリスト" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/amazongift.jpg" width="300" height="100" alt="Amazonギフトで応援イメージ"></a>
		</p>
	</aside>
	
	<aside class="sideBox">
		<h1>このカテゴリーの最近の記事</h1>
		<?php
			foreach((get_the_category()) as $cat) {
			$catid = $cat->cat_ID ;
			break ;
			}
			$get_posts_parm = "'numberposts=5&category=" . $catid . "'";
		?>
		<ul>
			<?php $posts = get_posts($get_posts_parm); ?>
			<?php foreach($posts as $post): ?>
			<li class="cateNew clearfix">
				<div class="thumb">
					<a href="<?php the_permalink(); ?>">
					<?php if (has_post_thumbnail()) : ?>
					<?php $image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id() ); ?>
					<img src="<?php echo $image_attributes[0]; ?>" width="100%" height="auto">
					<?php else: ?>
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/noImage300.png" width="100px" height="100px" alt="No image">
					<?php endif; ?>
					</a>
				</div>
				<div class="date"><?php echo get_post_time('Y.m.d D.'); ?></div>
				<div class="title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
			</li>
		<?php endforeach; ?>
		</ul>
	</aside>
	
	<aside class="sideBox">
		<h1>記事一覧リンク</h1>
		<h2>list of All Posts</h2>
		<p>今までの記事を全タイトルをサムネル付きで</p>
		▶<a href="https://rinare.com/all_entry" title="リンあれ記事タイトル一覧" target="_self">全タイトル一覧</a>
		
		<h2>Categories</h2>
		<ul><?php wp_list_categories('show_count=>True'); ?></ul>
		
		<h2>Monthly Archive</h2>
		<div class="monthArchive">
			<ul><?php wp_get_archives( 'type=monthly&show_post_count=True' ); ?></ul>
		</div>
	</aside>
	
	<aside class="sideBox">
		<h1>初心者向けiOSアプリ開発講座</h1>
		<div class="sideAd"><a href="http://egg-is-world.com/category/iphone-app-development-lecture/" title="「アプリクリエイター道場」関連記事一覧" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/bannerAppDojo01.jpg" width="300" height="250" alt="「アプリクリエイター道場」"></a></div>
		<p>少人数制の未経験向けiPhoneアプリ開発講座「アプリクリエイター道場（略してアプリ道場）」のアシスタント・キュレーターをしています。アプリを作れるようになりたいプログラミング未経験者さん、独学で挫折した人やエンジニアさんとのコミュニケーションのためiOSアプリのプログラミングを学びたい人など、今までいろいろな方が受講されています。ヽ('ヮ'*)ゝ現在、東京と大阪で定期開催されています。<br>
			（上の画像をクリックすると講師ブログのアプリ道場関連記事一覧にとび、今後の開講予定や卒業生インタビューなどがチェックできます。）</p>
	</aside>

	
	
	
	<!-- Facebook like box-->	
	<div class="fb-page" data-href="https://www.facebook.com/rinare.yucovin" data-width="300" data-height="130" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/rinare.yucovin"><a href="https://www.facebook.com/rinare.yucovin">もっと知りたいリンゴあれこれ（ユコびん）</a></blockquote></div></div>
	
	<div class="gBadge">
		<div class="g-page" data-href="//plus.google.com/u/0/101691713660925438323" data-layout="landscape" data-rel="publisher"></div>
	</div>
	

		
	
	<!-- adRakuten -->
	
	<aside class="sideBox">
		<h1>オススメりんごリンクサイト</h1>
		<a href="http://www.apple-style.com/" target="_blank" title="Apple-style">Apple-style</a>
		<p>●リンクページ＊工事中</p>
	</aside>
	
	<!-- adSidLarge -->
	<?php echo do_shortcode('[gAd_300x600]'); ?>
	
	<aside class="sideTag sideBox">
		<h3>Tag一覧</h3>
		<ul class="tags">
			<?php
			$posttags = get_tags();
				if ($posttags) {
					foreach($posttags as $tag) {
					 echo '<li><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a> ('. $tag->count . ')</li>'; 
					}
				}
			?>
		</ul>
	</aside>
	
	<!-- admax -->
	<script src="//adm.shinobi.jp/s/67ff27d66a16f62daac5c9b8d7536d35"></script>
	<!-- admax -->
	
	<aside class="sideBox">
		<h1>おすすめサーバー</h1>
		<p>実際使ったことがあるレンタルサーバー/左上からオススメ順</p>
		<a href="https://px.a8.net/svt/ejp?a8mat=1ZXKFN+4M3ZBU+CO4+64JTD" target="_blank" rel="nofollow">
<img border="0" width="125" height="125" alt="" src="https://www23.a8.net/svt/bgt?aid=120818867279&wid=002&eno=01&mid=s00000001642001029000&mc=1"></a>
<img border="0" width="1" height="1" src="https://www13.a8.net/0.gif?a8mat=1ZXKFN+4M3ZBU+CO4+64JTD" alt="">

<a href="https://px.a8.net/svt/ejp?a8mat=1ZXKFN+4A7B8A+CO4+NWZDD" target="_blank" rel="nofollow">
<img border="0" width="125" height="125" alt="" src="https://www24.a8.net/svt/bgt?aid=120818867259&wid=002&eno=01&mid=s00000001642004017000&mc=1"></a>
<img border="0" width="1" height="1" src="https://www17.a8.net/0.gif?a8mat=1ZXKFN+4A7B8A+CO4+NWZDD" alt="">

<a href="https://px.a8.net/svt/ejp?a8mat=2BLPW5+69NBTM+CO4+ZT81D" target="_blank" rel="nofollow">
<img border="0" width="125" height="125" alt="" src="https://www27.a8.net/svt/bgt?aid=140421461379&wid=002&eno=01&mid=s00000001642006015000&mc=1"></a>
<img border="0" width="1" height="1" src="https://www11.a8.net/0.gif?a8mat=2BLPW5+69NBTM+CO4+ZT81D" alt="">


<a href="https://px.a8.net/svt/ejp?a8mat=25TLJO+AI2AOQ+348+U6181" target="_blank" rel="nofollow">
<img border="0" width="125" height="125" alt="" src="https://www23.a8.net/svt/bgt?aid=130711380635&wid=002&eno=01&mid=s00000000404005067000&mc=1"></a>
<img border="0" width="1" height="1" src="https://www17.a8.net/0.gif?a8mat=25TLJO+AI2AOQ+348+U6181" alt="">

<a href="https://px.a8.net/svt/ejp?a8mat=25L2T6+DLECT6+D8Y+6DC69" target="_blank" rel="nofollow">
<img border="0" width="125" height="125" alt="" src="https://www28.a8.net/svt/bgt?aid=130313850822&wid=002&eno=01&mid=s00000001717001070000&mc=1"></a>
<img border="0" width="1" height="1" src="https://www11.a8.net/0.gif?a8mat=25L2T6+DLECT6+D8Y+6DC69" alt="">


<a href="https://px.a8.net/svt/ejp?a8mat=1U5FCY+7DJDCQ+348+6AZAP" target="_blank" rel="nofollow">
<img border="0" width="125" height="125" alt="" src="https://www23.a8.net/svt/bgt?aid=111107842446&wid=002&eno=01&mid=s00000000404001059000&mc=1"></a>
<img border="0" width="1" height="1" src="https://www13.a8.net/0.gif?a8mat=1U5FCY+7DJDCQ+348+6AZAP" alt="">

	</aside>
	<aside class="scroll">
		<div class="sideGaggedHead"></div>
		<div class="apps">
		<h1>App on Apple</h1>
		<!-- スクロールでついてくるやつ -->
		<p>iPhoneアプリをリリースしました。文字組み（組版）を始めたばかりの人、文字ばかり扱ってるわけではないデザイナーさんのためのアプリです。Q（級）やH（歯）をptや他の単位に自動変換。行送りも含め印刷した際の実寸プレビューが見られます。いくつかの便利なガイド計算機も付いています。</p>
		<div class="myApp clearfix">
		<a href="https://itunes.apple.com/jp/app/qhpt-bian-huan-purebyudekirudtp/id926191092?l=ja&ls=1&mt=8" title="QHpt変換 -プレビューできるDTP組版計算機" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/qhpt180.png" width="100" height="100" alt="QHpt変換 -プレビューできるDTP組版計算機"><p>●QHpt変換<br> -プレビューできるDTP組版計算機<br>無料</p></a>
		</div>
		<p>管理人おススメ＆愛用アプリいろいろです<br>リロードする毎に入れ替わります(๑´ㅂ`๑)</p>
		<ul class="applist">
		 <?php wp_list_bookmarks('orderby=rand&limit=5&category_orderby=name&category=218,217,215,216&title_li=&show_images=1&show_description=0'); ?>
		 <?php wp_list_bookmarks('orderby=rand&limit=10&category_orderby=name&category=160,219&title_li=&show_images=1&show_description=0'); ?>
		</ul>
		</div>
		<div class="sideGaggedTail"></div>
	</aside>

</div><!-- end.sidebar -->
