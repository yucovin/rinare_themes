<?php
/*
Template Name: sp
*/
?>

<?php get_header(); ?>		
			
		<div id="content">
			<div class="wraped clearfix">

			<!-- left side -->
			<div id="main">
				
				<div class="jaggedUpside"></div>
				<div class="post">
					
					<article>
						
						<!-- main loop for page -->
						<?php while(have_posts()) : the_post(); ?>
					
						<div class="entryHeaderPages clearfix">
							<span>in Rin*are</span>
							<div class="category">rin*are</div>
							<div class="tag">information</div>
							<div class="lastModify">[最終更新日] <?php the_modified_time('Y.m.d'); ?> at <?php the_modified_time('H:i'); ?></div>
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						</div>
						
						<?php get_template_part('share', 'head'); ?>
						<?php echo do_shortcode('[gAd_728]'); ?>
						
						<div class="entryBody">
							<?php the_content(); ?>
							<?php edit_post_link(); ?>
						</div>
						
						<!-- Facebook like -->
						<div class="fbpLike"><div class="fb-like" data-href="https://www.facebook.com/rinare.yucovin" data-width="580" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div></div>
						<!-- entryTailAd -->
						<div class="entryTallAd clearfix">
						<div class="tailAd"><?php echo do_shortcode('[gAd_336]'); ?></div>
						<div class="tailAd"><?php echo do_shortcode('[gAd_300]'); ?></div>
						</div>
						
						<aside class="relation">
							<!-- relation -->
							<h1>気になるものがあればクリックしてね！</h1>
							
							<div class="wrap8title clearfix">
								<?php get_template_part('relation', 'random'); ?>
							</div>
							
							<ul class="clearfix">
								<?php 
									$category = get_the_category(); 
									if ( $category[0] ) {
									echo '<li><a href="' . get_category_link( $category[0]->term_id ) . '" title="more posts at this Category">'.'このカテゴリーの記事をもっと見る</a></li>';
									}
								?>
								<!-- <li><a href="" title="more Category">このカテゴリーの記事をもっと見る</a></li> -->
								<li><a href="<?php echo home_url('/tag/with_illust'); ?>" title="Post with Illustration">イラスト入りの記事をみる！</a></li>
							</ul>
						</aside>
						
						<div class="entryFooter clearfix">
							<time datetime="<?php echo get_post_time('Y-m-d'); ?>">[Last modified] <?php the_modified_time('Y.m.d'); ?> at <?php the_modified_time('H:i'); ?></time>
							<div class="category">rin*are</div>
							<div class="tag">information</div>
							<div class="commCount">No Comment (*)</div>
						</div>
						
						<?php endwhile; ?>
						<!-- end main loop -->
					</article>
					
				</div><!-- end.post -->
				<div class="jaggedUpsideDown"></div>
				
				<!-- adRakuten -->
				
				
				<!-- about this site -->
				<?php get_template_part('follow', 'me'); ?>
				
				
					
			</div><!-- end.main -->
			
			<!-- right side -->
			<?php get_sidebar('page'); ?>
						
			</div><!-- end.wraped -->
		</div><!-- end.content -->

<?php get_footer(); ?>