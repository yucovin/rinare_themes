<?php get_header(); ?>		
			
		<div id="content">
			<div class="wraped clearfix">

			<!-- left side -->
			<div id="main">
				
				<div class="jaggedUpside"></div>
				<div class="post">
					
					<article>
					
						<div class="entryHeaderPages clearfix">
							<span>404</span>
							<div class="category">rin*are</div>
							<div class="tag">information</div>
							<div class="lastModify"><?php echo date('Y/m/d H:i s"',current_time('timestamp',0)); ?></div>
							<h1>Not Found</h1>
						</div>
						
						<?php echo do_shortcode('[gAd_728]'); ?>
						
						<div class="entryBody">
							<p>指定されたページは存在しません。</p>
							<p>記事が削除またはURLが変更された可能性があります。<br>
								お探しの情報が見つからない場合は右上の検索ボックスや<a href="http://rinare.com/all_entry" title="リンあれ記事タイトル一覧" target="_self">list of All Posts（全タイトル一覧）</a>(右サイドバーにもあります)をご利用下さい。</p> 
							<img src="<?php echo get_template_directory_uri(); ?>/images/notFound.png" width="100%" height="auto" alt="ページが見つかりませんでした">
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
							<time datetime="<?php echo get_post_time('Y-m-d'); ?>"><?php echo date('Y/m/d H:i s"',current_time('timestamp',0)); ?></time>
							<div class="category">rin*are</div>
							<div class="tag">information</div>
							<div class="commCount">No Comment (*)</div>
						</div>
						
						
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