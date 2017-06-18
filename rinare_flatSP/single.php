<?php get_header(); ?>
		
		
		
		<div id="content">
							
			<div class="jaggedUpside"></div>
			
			<div class="post">
				<article>
					
					<!-- main loop for single -->
					<?php while(have_posts()) : the_post(); ?>
				
					<div class="entryHeader clearfix">
						<div class="lastModify">[Last modified] <?php the_modified_time('Y.m.d'); ?> at <?php the_modified_time('H:i'); ?></div>
						<div class="date"><time datetime="<?php echo get_post_time('Y-m-d'); ?>"><?php echo get_post_time('Y  m/d D.'); ?></time></div>
						<div class="category"><?php the_category('/ '); ?></div>
						<div class="tag"><?php the_tags('','',''); ?></div>
						
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					</div>
					
					<?php get_template_part('share', 'sns'); ?>
					<div class="ad300"><?php echo do_shortcode('[gAd_300top]'); ?></div>
					
					<div class="entryBody">
						<?php the_content(); ?>
						<?php edit_post_link(); ?>
					</div>
					
					<!-- Facebook like -->
					<div class="fbpLike">
						このブログがお役に立ったり楽しんでもらえたら「いいね！」お願いします(๑⁰ 〰⁰)<br>
						<div class="fb-page" data-href="https://www.facebook.com/rinare.yucovin/" data-width="300" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/rinare.yucovin/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/rinare.yucovin/">もっと知りたいリンゴあれこれ（ユコびん）</a></blockquote></div>
					</div>
					<!-- entryTailAd -->
					
					<div class="ad320"><?php echo do_shortcode('[gAd_320x100]'); ?></div>
					
					<div class="ad300"><?php echo do_shortcode('[gAd_300entry]'); ?></div>
					
					<div class="sharePlease">シェアしてくれると嬉しいです(*´ー｀*) </div>
					<?php get_template_part('share', 'sns'); ?>
					
					
					<aside class="relation">
						<!-- relation -->
						<h1>この記事を読んでくれたあなたにオススメ</h1>
						<p><span class="cate">[Category]<?php the_category(' / '); ?></span></p>
						<div class="wrap8title">
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
							<li><a href="<?php echo home_url('/tag/with_illust'); ?>" title="Post with Illustration">そんなことよりイラスト入りの記事だけ見たい！</a></li>
						</ul>
					</aside>
					
					<div class="ad300"><?php echo do_shortcode('[gAd_300entry]'); ?></div>
					<div class="ad320">
						<script type="text/javascript">
var nend_params = {"media":13692,"site":63889,"spot":498603,"type":1,"oriented":1};
</script>
						<script type="text/javascript" src="https://js1.nend.net/js/nendAdLoader.js"></script>
					</div>
					
					<div class="entryFooter">
						<time datetime="<?php echo get_post_time('Y-m-d'); ?>"><?php echo get_post_time('Y  m/d D. H:i'); ?></time>
						<div class="lastModify">[Last modified] <?php the_modified_time('Y.m.d'); ?></div>
						<div class="category"><?php the_category(' / '); ?></div>
						<div class="tag"><?php the_tags('','',''); ?></div>
						<div class="commCount"><a href="<?php comments_link(); ?>">Comment (<?php comments_number('0', '1', '%'); ?>)</a></div>
					</div>
					
					<?php endwhile; ?>
					<!-- end main loop -->
					
				</article>
			</div><!-- end.post -->
			
			<div class="jaggedUpsideDown"></div>
			
			
			<!-- post nav -->
			<?php get_template_part('post', 'nav'); ?>
			
			
			<!-- support amazonlist -->
			<?php get_template_part('appeal', 'support'); ?>
			
			
			<!-- about this site -->
			<?php get_template_part('follow', 'me'); ?>
			
			
			<?php get_template_part('appeal', 'myApp'); ?>
			
			
			
			
			<?php comments_template(); ?>
			
			<div class="ad300">
			<!-- admax -->
			<script src="//adm.shinobi.jp/s/67ff27d66a16f62daac5c9b8d7536d35"></script>
			<!-- admax -->
			</div>
			
			<?php get_template_part('appeal', 'appdojo'); ?>
						
			
		
		</div><!-- end#content -->
		
<?php get_footer(); ?>		