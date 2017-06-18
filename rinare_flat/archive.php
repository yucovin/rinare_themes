<?php get_header(); ?>		
			
		<div id="content">
			<div class="wraped clearfix">
				
				<div class="kind clearfix">
					<div class="kindOfArchive">
					<?php if (is_year()) : ?>
			           <p>Archive / Year</p>
			           <span class="aRibbon"><?php echo get_query_var('year'); ?></span>
			        <?php elseif (is_month()) : ?>
			           <p>Year. Month</p>
			           <span class="aRibbon"><?php echo get_query_var('year').'. '.get_query_var('monthnum'); ?></span>
			        <?php elseif (is_day()) : ?>
			           <p>Year. Month. Day</p>
			           <span class="aRibbon"><?php echo get_query_var('year').'. '.get_query_var('monthnum').'. '.get_query_var('day'); ?></span>
			        <?php elseif (is_category()) : ?>
			           <p>Category</p>
			           <span class="aRibbon"><?php single_cat_title(); ?></span>
			        <?php elseif (is_tag()) : ?> 
			           <p>Tag</p>
			           <span class="aRibbon"><?php single_tag_title(); ?></span>
			        <?php else: ?>
			           <p>Archive</p>
			           <span class="aRibbon">Post</span>
			        <?php endif; ?>
					</div>
					<!-- ad横 -->
					<div class="ArchiveTopAd"><?php echo do_shortcode('[gAd_728]'); ?></div>
				</div><!-- end.kind -->
				
				<?php if(have_posts()) : ?>
				
				<!-- pagination -->
				<?php if (function_exists("pagination")) {
					pagination($additional_loop->max_num_pages);
				}?> 
				
				<?php
					$max_page = $wp_query->max_num_pages;
					 if ($max_page > 1){
					/*echo ('複数ページの時の処理')*/;
				}?>
				
				<!-- タイトル一覧リンク -->
				<!-- boxPost 3x5 うち広告gad2 raku1 他2 めくる度に入れ替わるものがいい　記事自体は10個 -->
				<div class="boxGroup clearfix">
					
					<?php $loopcounter = 0; while(have_posts()) : the_post(); $loopcounter++; ?>
					
					<div class="boxPost">
						<article>
						<div class="thumbnail">
							<a href="<?php the_permalink(); ?>">
							<?php if (has_post_thumbnail()) : ?>
							<?php $image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
								<img src="<?php echo $image_attributes[0]; ?>" width="100%" height="auto">
							<?php else: ?>
								<img src="<?php echo get_stylesheet_directory_uri() ?>/images/noImage672x560.png" width="336" height="280" alt="No image">
							<?php endif; ?>
							</a>
						</div><!-- end .thumbnail -->
						<time datetime="<?php echo get_post_time('Y-m-d'); ?>"><?php echo get_post_time('Y  m/d D.'); ?></time>
						<div class="titleDay">
							<a href="<?php the_permalink(); ?>">
							<h1><?php the_title(); ?></h1>
							<p><?php echo mb_substr(strip_tags(get_the_content()), 0, 200); ?></p>
							</a>
						</div>
						</article>
					</div>
					
					<?php if ($loopcounter == 2) {
						echo ('<div class="boxAd">'. do_shortcode('[gAd_336]'). '</div>');
					} elseif ($loopcounter == 4) {
						echo ('<div class="boxAdSmall">'. do_shortcode('[amazon_r300]'). '</div>
						<div class="boxAdSmall">'. do_shortcode('[gAd_300]'). '</div>');
					} elseif ($loopcounter == 8) {
						echo ('<div class="boxAdSmall"><a href="http://egg-is-world.com/app-creator-dojo-develop/" title="アプリクリエイター道場" target="_blank"><img src="'. get_template_directory_uri(). '/images/bannerAppDojo672_'.(rand(1,2)).'.png" width="300" height="250" alt="アプリクリエイター道場"></a></div>');
					} elseif ($loopcounter == 10) {
						echo ('<div class="boxAdSmall">'. do_shortcode('[maxAd_300]'). '</div>');
					} ?>
					<?php endwhile; ?>
					
					
					<!-- count of posts in this page -->
					<?php if ($loopcounter == 1) {
						echo ('<div class="boxAd">'. do_shortcode('[gAd_336]'). '</div>
						<div class="boxAdSmall">'. do_shortcode('[gAd_300]'). '</div>
						<div class="boxAdSmall"><a href="http://egg-is-world.com/app-creator-dojo-develop/" title="アプリクリエイター道場" target="_blank"><img src="'. get_template_directory_uri(). '/images/bannerAppDojo672_'.(rand(1,2)).'.png" width="300" height="250" alt="アプリクリエイター道場"></a></div>');
					} elseif ($loopcounter == 2 || $loopcounter == 3 ) {
						echo ('<div class="boxAdSmall">'. do_shortcode('[gAd_300]'). '</div>
						<div class="boxAdSmall"><a href="http://egg-is-world.com/app-creator-dojo-develop/" title="アプリクリエイター道場" target="_blank"><img src="'. get_template_directory_uri(). '/images/bannerAppDojo672_'.(rand(1,2)).'.png" width="300" height="250" alt="アプリクリエイター道場"></a></div>
						<div class="boxAdSmall">'. do_shortcode('[maxAd_300]'). '</div>');
					} elseif ($loopcounter >= 4 && $loopcounter <= 7 ) {
						echo ('<div class="boxAdSmall"><a href="http://egg-is-world.com/app-creator-dojo-develop/" title="アプリクリエイター道場" target="_blank"><img src="'. get_template_directory_uri(). '/images/bannerAppDojo672_'.(rand(1,2)).'.png" width="300" height="250" alt="アプリクリエイター道場"></a></div>
						<div class="boxAdSmall">'. do_shortcode('[maxAd_300]'). '</div>');
					} elseif ($loopcounter >= 8 && $loopcounter <= 9 ) {
						echo ('<div class="boxAdSmall">'. do_shortcode('[maxAd_300]'). '</div>');
					} ?>
					
					
				</div><!-- end.boxGroup -->
				
				<!-- pagination -->
				<?php if (function_exists("pagination")) {
					pagination($additional_loop->max_num_pages);
				}?> 
				
				<?php endif; ?>

				
				
				<!-- about etc-->
				<!-- left side -->
				<div id="main">
					<!-- about this site -->
					<?php get_template_part('follow', 'me'); ?>
				</div>
				<!-- right side -->
				<div id="sidebar">
					<div class="fb-page" data-href="https://www.facebook.com/rinare.yucovin" data-width="300" data-height="130" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/rinare.yucovin"><a href="https://www.facebook.com/rinare.yucovin">もっと知りたいリンゴあれこれ（ユコびん）</a></blockquote></div></div>
					<div class="gBadge">
						<div class="g-page" data-href="//plus.google.com/u/0/101691713660925438323" data-layout="landscape" data-rel="publisher"></div>
					</div>
					<div class="sideAd"></div>
					
				</div>
				
			</div><!-- end.wraped -->
		</div><!-- end.content -->

<?php get_footer(); ?>	