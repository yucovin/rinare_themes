<?php
/*
Template Name: allentry
*/
?>
<?php get_header(); ?>
		
		
		<div id="content">
							
			<div class="jaggedUpside"></div>
			
			<div class="post allTitle">
				<section>
				
				
					<div class="entryHeader clearfix">
						
						<div class="date"><span>All Post List</span></div>
						<div class="category">rin*are information</div>
						
						<h1><?php the_title(); ?></h1>
					</div>
					
					<p>このブログ全記事リストが月ごとに表示されます。サムネイル付きなので読み込むのに時間がかかることがあります。</p>
					
					<div class="ad300"><?php echo do_shortcode('[gAd_300top]'); ?></div>
					
					<div class="entryBody">
						<!-- post loop まず条件を作る -->
						<?php
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args = array(
								'paged' => $paged,
								'nopaging' => 1,
								'order'=>'DESC',
								'orderby'=>'date'
							);
						?>
						<!-- 条件で新しいクエリを作る -->
						<?php $list_query = new WP_Query($args); ?>
						<!-- global変数の$postを上書きして -->
						<?php if ( $list_query->have_posts() ) : 
							$postmonth = false; // 比較用の変数を初期化 
						?>
						
						<?php while ( $list_query->have_posts() ) : $list_query->the_post(); ?>
							<?php if( $postmonth != get_post_time('Yn') ) : // 投稿年月を比較
								if ( $postmonth !== false ) : // 最初のループは除外。２回目以降で投稿年月が異なれば閉じタグを出力
								?>
								</ul>
								
							<?php endif; ?>
						
						<h2 class="yearMonth"><?php echo get_post_time('Y.m'); ?></h2>
							<ul>
							<?php endif; ?>
								<li class="dayTitle clearfix">
									<div class="day"><?php echo get_post_time('d D.'); ?></div>
									<div class="miniThumbnail">
										<?php if (has_post_thumbnail()) : ?>
										<?php $image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'size100' ); ?>
											<img src="<?php echo $image_attributes[0]; ?>" width="100%" height="auto">
										<?php else: ?>
										<a href="<?php the_permalink(); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/noImage100.png" width="50" height="50" alt="No image"></a>
										<?php endif; ?>
									</div>
									
									<div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
								</li>
								<?php $postmonth = get_post_time('Yn'); // 比較用の変数に年月を代入 ?>
								
						<?php endwhile; ?>
						
						<?php endif; ?>
						
						
						<!-- $list_queryループの条件をリセットする -->
						<?php wp_reset_postdata(); ?>
						
					</div>
					
				</section>
			</div><!-- end.post -->
			
			<div class="jaggedUpsideDown"></div>
			
			<div class="ad320"><?php echo do_shortcode('[gAd_320x100]'); ?></div>
			
			
				
		</div><!-- end#content -->
		
<?php get_footer(); ?>		