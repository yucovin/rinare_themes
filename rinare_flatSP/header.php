<!doctype html>
<html lang="ja">

<head prefix="og: https://ogp.me/ns# <?php if(is_single() || is_page()){ echo 'fb: https://ogp.me/ns/fb# article: https://ogp.me/ns/article#"'; }else{ echo 'fb: https://ogp.me/ns/fb# website: https://ogp.me/ns/website#"'; } ?>>


<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php wp_title('/', true, 'right'); bloginfo('name'); ?></title>

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
<link href='https://fonts.googleapis.com/css?family=Source+Code+Pro' rel='stylesheet' type='text/css'>

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
<meta property="og:image" content="<?php if( has_post_thumbnail() ){ $thumbnail = wp_get_attachment_image_src ( get_post_thumbnail_id ( $post->ID ), 'ogp_thumbnail'); echo $thumbnail[0]; } else { echo 'https://rinare.com/wp-content/themes/rinare_flat/images/thumbnail1200.png'; } ?>" />

<?php endwhile; ?>
<?php } else { ?>
<meta property="og:title" content="もっと知りたいリンゴあれこれ" />
<meta property="og:locale" content="ja_JP" />
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<meta property="og:url" content="https://rinare.com/" />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?php echo 'https://rinare.com/wp-content/themes/rinare_flat/images/thumbnail1200.png'; ?>" />
<?php } ?>

<meta property="og:site_name" content="もっと知りたいリンゴあれこれ" />
<meta property="article:publisher" content="https://www.facebook.com/rinare.yucovin" />
<meta property="fb:admins" content="100005561714394" />
<meta property="fb:app_id" content="199603450527395" />


<!-- webマスターツール用 -->
<meta name="google-site-verification" content="PkxAyxNExEZVu-Zm3VpfQv-xEmAPROtqyL_qGK5XsNw" />

<!-- Gogole Anchor -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7903067641116583",
    enable_page_level_ads: true
  });
</script>

</head>

<body <?php body_class(); ?>>
	
	<div id="container">
		
		<header id="header">
			
			<div id="siteTitle">
				<h1><a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?> top pageへ"><img src="<?php echo get_template_directory_uri(); ?>/images/rinareTitle.png" width="414" height="50" alt="<?php bloginfo('name'); ?>"></a></h1>
				<div id="catchphrase">
					<?php bloginfo('description'); ?>
				</div>
			</div><!-- end #siteTitle -->
		</header><!-- end #header -->
		
		<div id="titleImage">
			<img src="<?php echo get_template_directory_uri(); ?>/images/rinareImage.png" width="414" height="155" alt="<?php bloginfo('name'); ?>">
		</div><!-- end#titleImage -->
		
		
		
		
		<div id="navigation">
			
			<?php get_template_part('navbar', 'top'); ?>
		
			<nav id="breadCrumb">
				<!-- パンくずリスト -->
				<?php if ( function_exists( 'bread_crumb' ) ) { bread_crumb(); } ?>
			</nav>	
		</div><!-- end #navigation -->