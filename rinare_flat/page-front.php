<?php
/*
Template Name: front
*/
?>

<?php get_header(); ?>		
			
		<div id="content">
			<div class="wraped clearfix">
				
				
				<!-- 最新の記事を除外できるように最初にidをとって$latest_idに入れておく-->
				<?php $latest_id = return_latest_id(); ?>
				
				<!-- newer post loop まず条件を作る -->
				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
						'paged' => $paged,
						'posts_per_page' => 1,
					);
				?>
				<!-- 条件で新しいクエリを作る -->
				<?php $top_query = new WP_Query($args); ?>
				<!-- global変数の$postを上書きして -->
				<?php if ( $top_query->have_posts() ) : ?>
				<?php while ( $top_query->have_posts() ) : $top_query->the_post(); ?>

				<div id="new" class="clearfix">
					
					<div class="lastEntry">
						<article>
							
							<div class="newerBox clearfix">
								<div class="thumbnail">
									<a href="<?php the_permalink(); ?>">
									<div class="eyeCatch">
										<?php if (has_post_thumbnail()) : ?>
										<?php $image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
											<img src="<?php echo $image_attributes[0]; ?>" width="100%" height="auto">
										<?php else: ?>
											<img src="<?php echo get_stylesheet_directory_uri() ?>/images/noImage672x560.png" width="288" height="240" alt="No image">
										<?php endif; ?>
										</div>
									</a>
								</div><!-- end .thumbnail -->
								
								<div class="intro clearfix">
									<time datetime="<?php echo get_post_time('Y-m-d'); ?>"><?php echo get_post_time('Y  m/d D.'); ?></time>
									
									<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
									<div class="category">category：<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></div>
									
									<div class="excerpt"><?php the_excerpt(); ?></div>
									
									
								</div>
							
							<?php endwhile; ?>
							<?php else : ?>
							<p>記事がありませんでした</p>
							<?php endif; ?>
							</div>
							
						</article>
					</div>
					<p><span>Newest</span></p>
					
					<!-- adRightTop -->
					<div class="boxAd"><?php echo do_shortcode('[gAd_336]'); ?></div>
				</div>
				<!-- 最初に作った$top_queryループの条件をリセットする -->
				<?php wp_reset_postdata(); ?>
				<!-- end of newer post loop -->
				
				
				
				<div id="topNewer" class="clearfix">
					<!-- newer loop -->
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					
					$args = array(
						'paged' => $paged,
						'posts_per_page' => 4,
						'post__not_in' => array($latest_id),
					);
					?>
					<?php $newer_query = new WP_Query($args); ?>
					
					<section class="newerPost">
						
						<?php if ( $newer_query->have_posts() ) : ?>
						<?php $loopcounter = 0; while ( $newer_query->have_posts() ) : $newer_query->the_post(); $loopcounter++; ?>
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
						
						<?php if ($loopcounter %2 == 0) {
							echo ('<div class="adMark">スポンサー リンク</div><div class="boxAd">'. do_shortcode('[gAd_336]'). '</div>');
						} ?>
						<?php endwhile; ?>
						<?php else : ?>
						<p>記事がありませんでした</p>
						<?php endif; ?>
						<div class="moreCate">
							<a href="<?php echo home_url('/archive/'); ?>" title="archive">新しい記事をもっと見る</a></div>
					</section>
					<?php wp_reset_postdata(); ?>
					<!-- end of newer loop -->
					
					<aside class="simpleAbout">
						<!-- about this site -->
						<?php get_template_part('simple', 'about'); ?>
						
					</aside>
				</div>
				
				
				
				
				<?php get_template_part('appeal', 'view'); ?>
				
				
				<section>
				<h1 class="cateNew">カテゴリー別新着順</h1>
				
								
				
				<div class="categoryBox clearfix">
					<!-- 1st Category loop -->
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					
					$args = array(
						'paged' => $paged,
						'posts_per_page' => 5,
						'category_name' => 'iphone_ipad_gadget',
					);
					?>
					<?php $cat_query = new WP_Query($args); ?>
					
					<section class="cateiPhone">
						<h2 class="ribbon">iPhone + iPad + Gadget</h2>
						
						<?php if ( $cat_query->have_posts() ) : ?>
						<?php $loopcounter = 0; while ( $cat_query->have_posts() ) : $cat_query->the_post(); $loopcounter++; ?>
						
						<?php get_template_part('top', 'minibox'); ?>
						
						<?php endwhile; ?>
						
						<div class="moreCatePost">
							<a href="<?php echo home_url('/category/iphone_ipad_gadget'); ?>" title="iPhone+iPad+Gadget">
								<div class="moreButton">><span>このカテゴリーの記事をもっと見る</span></div>
							</a>
						</div>
						
						<?php else : ?>
						<p>I have no post!</p>
						<?php endif; ?>
						
					</section>
					<?php wp_reset_postdata(); ?>
					<!-- end of 1st Category loop -->
				</div>
				
				
				
				
				<div class="categoryBox clearfix">
					<!-- 2nd Category loop -->
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					
					$args = array(
						'paged' => $paged,
						'posts_per_page' => 5,
						'category_name' => 'mac',
					);
					?>
					<?php $cat_query = new WP_Query($args); ?>
					
					<section class="cateMac">
						<h2 class="ribbon">Mac + Peripheral</h2>
						
						<?php if ( $cat_query->have_posts() ) : ?>
						<?php $loopcounter = 0; while ( $cat_query->have_posts() ) : $cat_query->the_post(); $loopcounter++; ?>
						<?php get_template_part('top', 'minibox'); ?>
						
						<?php endwhile; ?>
						
						<div class="moreCatePost">
							<a href="<?php echo home_url('/category/mac'); ?>" title="Mac+App+Peripheral">
								<div class="moreButton">><span>このカテゴリーの記事をもっと見る</span></div>
							</a>
						</div>
						
						<?php else : ?>
						<p>I have no post!</p>
						<?php endif; ?>
						
					</section>
					<?php wp_reset_postdata(); ?>
					<!-- end of 2nd Category loop -->
				</div>
				
				
				<div class="categoryBox clearfix">
					<!-- 3rd Category loop -->
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					
					$args = array(
						'paged' => $paged,
						'posts_per_page' => 5,
						'category_name' => 'apple',
					);
					?>
					<?php $cat_query = new WP_Query($args); ?>
					
					<section class="cateApple">
						<h2 class="ribbon">Apple</h2>
						
						<?php if ( $cat_query->have_posts() ) : ?>
						<?php $loopcounter = 0; while ( $cat_query->have_posts() ) : $cat_query->the_post(); $loopcounter++; ?>
						
						<?php get_template_part('top', 'minibox'); ?>
						
						<?php endwhile; ?>
						
						<div class="moreCatePost">
							<a href="<?php echo home_url('/category/apple'); ?>" title="Apple">
								<div class="moreButton">><span>このカテゴリーの記事をもっと見る</span></div>
							</a>
						</div>
						
						<?php else : ?>
						<p>I have no post!</p>
						<?php endif; ?>
						
					</section>
					<?php wp_reset_postdata(); ?>
					<!-- end of 3rd Category loop -->
					
				</div>
				
								
				
				<div class="categoryBox clearfix">
					<!-- 4th Category loop -->
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					
					$args = array(
						'paged' => $paged,
						'posts_per_page' => 5,
						'category_name' => 'web_develop_illust',
					);
					?>
					<?php $cat_query = new WP_Query($args); ?>
					
					<section class="cateDeve">
						<h2 class="ribbon">Development + Web + Illust + Design</h2>
						
						<?php if ( $cat_query->have_posts() ) : ?>
						<?php $loopcounter = 0; while ( $cat_query->have_posts() ) : $cat_query->the_post(); $loopcounter++; ?>
						<?php get_template_part('top', 'minibox'); ?>
						
						<?php endwhile; ?>
						
						<div class="moreCatePost">
							<a href="<?php echo home_url('/category/web_develop_illust'); ?>" title="Development+Web+Design+Illustration">
								<div class="moreButton">><span>このカテゴリーの記事をもっと見る</span></div>
							</a>
						</div>
						
						<?php else : ?>
						<p>I have no post!</p>
						<?php endif; ?>
						
					</section>
					<?php wp_reset_postdata(); ?>
					<!-- end of 4th Category loop -->
				</div>
				
				
				
				<div class="categoryBox clearfix">
					<!-- 5th Category loop -->
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					
					$args = array(
						'paged' => $paged,
						'posts_per_page' => 5,
						'category_name' => 'diary',
					);
					?>
					<?php $cat_query = new WP_Query($args); ?>
					
					<section class="cateDiary">
						<h2 class="ribbon">Diary + Blog</h2>
						
						<?php if ( $cat_query->have_posts() ) : ?>
						<?php $loopcounter = 0; while ( $cat_query->have_posts() ) : $cat_query->the_post(); $loopcounter++; ?>
						
						<?php get_template_part('top', 'minibox'); ?>
						
						<?php endwhile; ?>
						
						<div class="moreCatePost">
							<a href="<?php echo home_url('/category/diary'); ?>" title="Diary+Trivia">
								<div class="moreButton">><span>このカテゴリーの記事をもっと見る</span></div>
							</a>
						</div>
						
						<?php else : ?>
						<p>I have no post!</p>
						<?php endif; ?>
						
					</section>
					<?php wp_reset_postdata(); ?>
					<!-- end of 5th Category loop -->
				</div>
				

				</section>
				
				
				
				</div><!-- end.wraped -->
		</div><!-- end.content -->

<?php get_footer(); ?>