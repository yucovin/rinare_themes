<!doctype html>
<html lang="ja">

<head prefix="og: https://ogp.me/ns# <?php if(is_single() || is_page()){ echo 'fb: https://ogp.me/ns/fb# article: https://ogp.me/ns/article#"'; }else{ echo 'fb: https://ogp.me/ns/fb# website: https://ogp.me/ns/website#"'; } ?>>


<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php wp_title('/', true, 'right'); bloginfo('name'); ?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />

<!-- web font -->
<link href='https://fonts.googleapis.com/css?family=Source+Code+Pro' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/favicon225.png">

<!--[if lte IE 8]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lte IE 7]><style>
.content { margin-right: -1px; } /* 補正効果 */
ul.nav a { zoom: 1; }  /* IEリンク間余分スペース修正*/
</style><![endif]-->

<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>


<link rel="author" href="https://plus.google.com/113215053096203603042/posts" />

<?php if(is_single()||is_page()){ ?>
<?php while (have_posts()) : the_post(); ?>
<meta property="og:title" content="<?php the_title(); ?>＊リンあれ" />
<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
<meta property="og:url" content="<?php echo esc_url( get_permalink() ); ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php if( has_post_thumbnail() ){ $thumbnail = wp_get_attachment_image_src ( get_post_thumbnail_id ( $post->ID ), 'ogp_thumbnail'); echo $thumbnail[0]; } else { echo 'https://rinare.com/wp-content/themes/rinare_flat/images/thumbnail600.png'; } ?>" />

<?php endwhile; ?>
<?php } else { ?>
<meta property="og:title" content="もっと知りたいリンゴあれこれ" />
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<meta property="og:url" content="https://rinare.com/" />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?php echo 'https://rinare.com/wp-content/themes/rinare_flat/images/thumbnail600.png'; ?>" />
<?php } ?>

<meta property="og:site_name" content="もっと知りたいリンゴあれこれ" />
<meta property="og:locale" content="ja_JP" />
<meta property="article:publisher" content="https://www.facebook.com/rinare.yucovin" />
<meta property="fb:admins" content="100005561714394" />
<meta property="fb:app_id" content="199603450527395"/>


<!-- webマスターツール用 -->
<meta name="google-site-verification" content="PkxAyxNExEZVu-Zm3VpfQv-xEmAPROtqyL_qGK5XsNw" />

</head>





<body <?php body_class(); ?>>
	
	<div id="container">
		
		<header id="header" class="clearfix">
			
			<div id="siteTitle">
				<div id="badge">
					<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?> top pageへ">
					<div class="face">
						<img src="<?php echo get_template_directory_uri(); ?>/images/badgeFace.png" width="100" height="100" alt="<?php bloginfo('name'); ?>">
					</div>
					<div class="back">
						<img src="<?php echo get_template_directory_uri(); ?>/images/badgeBack<?php echo(mt_rand(1,3)); ?>.png" width="100" height="100" alt="<?php bloginfo('name'); ?>home">
					</div>
					</a>
				</div>
				<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?> top pageへ">
					<h1><img src="<?php echo get_template_directory_uri(); ?>/images/rinareTitle.png" width="785" height="70" alt="<?php bloginfo('name'); ?>">
					</h1>
				</a>
				<div id="catchphrase">
					<?php bloginfo('description'); ?>
				</div>
			</div><!-- end #siteTitle -->
		</header><!-- end #header -->
		
		<div id="titleImage">
			<div id="imageMap">
				
			</div>
		</div><!-- end#titleImage -->
			

		<div id="navigation">
			<div id="navbar" class="clearfix">
				<nav>
					<ul>
						<li id="navTop" class="normal"><a href="<?php echo home_url(); ?>" title="go to site top">Top</a></li>
						<li id="navCategory"><a href="#" title="category list">Category</a>
							<div class="cover"></div>
							<ul>
								<li class="apple"><a href="<?php echo home_url('/category/apple'); ?>" title="Apple"></a></li>
								<li class="iphone"><a href="<?php echo home_url('/category/iphone_ipad_gadget'); ?>" title="iPhone+iPad+Gadget"></a></li>
								<li class="mac"><a href="<?php echo home_url('/category/mac'); ?>" title="Mac+App+Peripheral"></a></li>
								<li class="dev"><a href="<?php echo home_url('/category/web_develop_illust'); ?>" title="Development+Web+Design+Illustration"></a></li>
								<li class="diary"><a href="<?php echo home_url('/category/diary'); ?>" title="Diary+Trivia"></a></li>
								<!-- <li><a href="#">show all tags</a></li> -->
							</ul>
						</li>
						<li id="navAbout" class="normal"><a href="<?php echo home_url('/about'); ?>" title="about this site">About</a></li>
						<li id="navContact" class="normal"><a href="<?php echo home_url('/contact'); ?>" title="contact with me">Contact</a></li>
					</ul>
				</nav>
				<div id="info">
				
					<ul>
						<li id="rss"><a href="<?php echo home_url('/about_rss'); ?>" title="リンあれrss feed"></a></li>
						<li id="twitter"><a href="https://twitter.com/yucovin" target="_blank" title="ゆこびんtwitterをFollow"></a></li>
						<li id="facebook"><a href="https://www.facebook.com/rinare.yucovin" target="_blank" title="リンあれFacebookページ"></a></li>
						<li id="googlePlus"><a href="https://plus.google.com/113215053096203603042/" target="_blank" title="ゆこびんGooglePlusをFollow"></a></li>
					</ul>
				</div>
				<div id="search">
<!--
					<div id='cse' style='width: 100%;'>…Loading</div>
						<script src='//www.google.com/jsapi' type='text/javascript'></script>
						<script type='text/javascript'>
						google.load('search', '1', {language: 'ja', style: google.loader.themes.GREENSKY});
						google.setOnLoadCallback(function() {
						  var customSearchOptions = {};
						  var orderByOptions = {};
						  orderByOptions['keys'] = [{label: 'Relevance', key: ''} , {label: 'Date', key: 'date'}];
						  customSearchOptions['enableOrderBy'] = true;
						  customSearchOptions['orderByOptions'] = orderByOptions;
						  var imageSearchOptions = {};
						  imageSearchOptions['layout'] = 'google.search.ImageSearch.LAYOUT_POPUP';
						  customSearchOptions['enableImageSearch'] = true;
						  customSearchOptions['overlayResults'] = true;
						  var customSearchControl =   new google.search.CustomSearchControl('018249481112592033638:y8zbmw2ghig', customSearchOptions);
						  customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
						  var options = new google.search.DrawOptions();
						  options.setAutoComplete(true);
						  customSearchControl.draw('cse', options);
						}, true);
						</script>
-->
						<!-- google search -->
						<script>
						  (function() {
						    var cx = '018249481112592033638:y8zbmw2ghig';
						    var gcse = document.createElement('script');
						    gcse.type = 'text/javascript';
						    gcse.async = true;
						    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
						    var s = document.getElementsByTagName('script')[0];
						    s.parentNode.insertBefore(gcse, s);
						  })();
						</script>
<gcse:search></gcse:search>
				</div>
				
			</div><!-- end #navbar -->
		
		
			<nav id="breadCrumb">
				<!-- パンくずリスト -->
				<?php if ( function_exists( 'bread_crumb' ) ) { bread_crumb(); } ?>
			</nav>	
		</div><!-- end #navigation -->