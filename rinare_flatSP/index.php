<?php get_header(); ?>		
		
		<div id="content">
			
			<div class="ad320">
				<?php echo do_shortcode('[gAd_320x100]'); ?>
			</div>
			
			
			<?php if(have_posts()) : ?>
			<?php $loopcounter = 0; while(have_posts()) : the_post(); $loopcounter++; ?>
							
			<div class="jaggedUpside"></div>
			
			<div class="boxPost clearfix">
				<article>
					<div class="date">
						<time datetime="<?php echo get_post_time('Y-m-d'); ?>"><?php echo get_post_time('Y  m/d D.'); ?></time>
						</div>
					<div class="category"><?php the_category('/ '); ?></div>
					<div class="tag"><?php the_tags('','',''); ?></div>
					
					<a href="<?php the_permalink(); ?>">
						<div class="titleBox">
							<div class="thumb">
								<?php if (has_post_thumbnail()) : ?>
								<?php $image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
								<img src="<?php echo $image_attributes[0]; ?>" width="100%" height="auto">
								<?php else: ?>
								<img src="<?php echo get_stylesheet_directory_uri() ?>/images/noImage300.png" width="100%" height="auto" alt="No image">
								<?php endif; ?>
							</div>
							<h1><?php the_title(); ?></h1>
						</div>
					</a>
					
					<div class="morelink"><a href="<?php the_permalink(); ?>">read this post &rsaquo;</a></div>
				
				</article>
			</div>
			
			<div class="jaggedUpsideDown"></div>
			
			<?php if ($loopcounter == 1 || $loopcounter == 3) {
				echo ('<div class="ad300">'. do_shortcode('[gAd_300top]'). '</div>');
			} elseif ($loopcounter == 5) {
				echo ('<div class="ad320">'. do_shortcode('[gAd_320x100]'). '</div>');
			} ?>

			
			<?php endwhile; ?>
			
			
			<!-- pagination -->
				<?php if (function_exists("pagination")) {
					pagination($additional_loop->max_num_pages);
				}?> 

			
			
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
			
			
			<!-- support amazonlist -->
			<?php get_template_part('appeal', 'support'); ?>
			
			
			
			<!-- about this site -->
			<?php get_template_part('follow', 'me'); ?>
			
			
			<?php get_template_part('appeal', 'myApp'); ?>
		
		
			<?php get_template_part('appeal', 'appdojo'); ?>
						
		
		</div><!-- end#content -->
		
<?php get_footer(); ?>		