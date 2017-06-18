<?php
/*
Template Name: privacypolicy
*/
?>
<?php get_header(); ?>
		
		
		<div id="content">
							
			<div class="jaggedUpside"></div>
			
			<div class="post">
				<article>
					
					<!-- main loop for single -->
					<?php while(have_posts()) : the_post(); ?>
				
					<div class="entryHeader clearfix">
						<div class="lastModify">[Last modified] <?php the_modified_time('Y.m.d'); ?> at <?php the_modified_time('H:i'); ?></div>
						<div class="date"><span>Privacy policy</span></div>
						<div class="category">rin*are information</div>
						
						<h1><?php the_title(); ?></h1>
					</div>
					
					<div class="ad300"><?php echo do_shortcode('[gAd_300top]'); ?></div>
					
					<div class="entryBody">
						<?php the_content(); ?>
						<?php edit_post_link(); ?>
					</div>
					
					<!-- Facebook like -->
					<div class="fbpLike"><div class="fb-like" data-href="https://www.facebook.com/rinare.yucovin" data-width="300" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div></div>
					<!-- entryTailAd -->
					<div class="ad300"><?php echo do_shortcode('[gAd_300entry]'); ?></div>
					
					
					
					<aside class="relation">
						<!-- relation -->
						<h1>よければこちらの記事もどうぞ(*'ω'*)</h1>
						
						<div class="wrap8title">
							<?php get_template_part('relation', 'random'); ?>
						</div>
						
						<ul class="clearfix">
							
							<li><a href="<?php echo home_url('/tag/with_illust'); ?>" title="Post with Illustration">そんなことよりイラスト入りの記事だけ見たい！</a></li>
						</ul>
					</aside>
					
					<div class="ad320"><?php echo do_shortcode('[gAd_320x100]'); ?></div>
					
					<div class="entryFooter">
						<time>[Last modified] <?php the_modified_time('Y.m.d'); ?></time>
						<div class="category">rin*are information</div>
						
					</div>
					
					<?php endwhile; ?>
					<!-- end main loop -->
					
				</article>
			</div><!-- end.post -->
			
			<div class="jaggedUpsideDown"></div>
			
			
			
			<!-- about this site -->
			<?php get_template_part('follow', 'me'); ?>
			
			
			<?php get_template_part('appeal', 'myApp'); ?>
			
			
			<?php get_template_part('appeal', 'appdojo'); ?>

						
			
		
		</div><!-- end#content -->
		
<?php get_footer(); ?>		