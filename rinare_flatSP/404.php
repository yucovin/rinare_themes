<?php get_header(); ?>
		
		
		<div id="content">
							
			<div class="jaggedUpside"></div>
			
			<div class="post">
				<article>
					
				
					<div class="entryHeader clearfix">
						<div class="lastModify"><?php echo date('Y/m/d H:i s"',current_time('timestamp',0)); ?></div>
						<div class="date"><span>404</span></div>
						<div class="category">rin*are information</div>
						
						<h1>Not Found</h1>
					</div>

					
					<div class="entryBody">
						<p>指定されたページは存在しません。</p>
						<div class="ad320"><?php echo do_shortcode('[gAd_320x100]'); ?></div>
						<img src="<?php echo get_template_directory_uri(); ?>/images/notFound.png" width="100%" height="auto" alt="ページが見つかりませんでした">
						<p>記事が削除またはURLが変更された可能性があります。<br>
								お探しの情報が見つからない場合は右上の検索ボックス（Searchと書かれた虫眼鏡をクリックすると出てきます）や<a href="http://rinare.com/all_entry" title="リンあれ記事タイトル一覧" target="_self">list of All Posts（全タイトル一覧）</a>をご利用下さい。</p> 
							
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
					
					
					
					<div class="entryFooter">
						<time>[Last modified] <?php the_modified_time('Y.m.d'); ?></time>
						<div class="category">rin*are information</div>
						
					</div>
					
					
				</article>
			</div><!-- end.post -->
			
			<div class="jaggedUpsideDown"></div>
			
			
			
			<!-- about this site -->
			<?php get_template_part('follow', 'me'); ?>
			
			
			<?php get_template_part('appeal', 'myApp'); ?>
			
			
			<?php get_template_part('appeal', 'appdojo'); ?>
						
			
		
		</div><!-- end#content -->
		
<?php get_footer(); ?>		