<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>
<div id="content">
			<div class="wraped clearfix">
				
				<div class="jaggedUpside"></div>
				<div class="pageAbout">
					
					<article>
						
						<!-- main loop for about -->
						<?php while(have_posts()) : the_post(); ?>
					
						<div class="entryHeader clearfix">
							<div class="titleBox">
								<span class="frag">About this site</span>
								<div class="category">rin*are</div>
								<div class="tag">information</div>
								<div class="lastModify">[Last modified] <?php the_modified_time('Y.m.d'); ?> at <?php the_modified_time('H:i'); ?></div>
								<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								<?php get_template_part('share', 'head'); ?>
							</div>
							<div class="rightAd"><?php echo do_shortcode('[gAd_336]'); ?></div>
						</div>
						
						
						<div class="entryBody">
							<p>「もっと知りたいリンゴあれこれ」は、Macと出会い人生がちょっと（だいぶ？）変わった管理人ゆこびんとその愉快な仲間たちの日常を綴るゆるい絵日記Appleブログです。読者の方々は略して「リンあれ」と呼んでくれています。月間25万PV。<br>
							Apple関連、Mac、iPhone、iPadの話を中心にガジェット（AndroidはでっかいモバイルSuica）など、備忘録やまつわる出来事を書いています。他にはWeb制作、アプリ開発の話、たまに全く私的な日記風なものもあります。</p>
							<p>ブログを読み始めてくれたばかりの人たちからわりとよく「ねこ先生（や他の登場人物）は本当にいるのか？　ブログの話はどこまで本当なのか？」と尋ねられることがあります。リンあれは基本ノンフィクションで、実在する人たちの実際起きたエピソードが描かれています。（ねこ先生が猫の姿をしていたり、名前が実名ではなくハンドルネームや愛称だったりというフィクションなところは一部ありますが）</p>
							<p>それではリンあれに出てくるゆこびん周辺のAppleな人々を少しばかり紹介しましょう。</p>
							
							<img src="<?php echo get_template_directory_uri(); ?>/images/correlation.png" width="988" height="auto" alt="リンあれ相関図">
							<p>こんな人たちが「リンあれ」に登場しています。（他にも登場している人もいるので一部だけですが。）
								中には、登場回数1.5回（しかも超初期に）しかないのに読者さんから絶大な人気をほこるジョージ（仮名）なんてのもいます。でも、途中からApple Storeでのエピソードはブログには書きづらくなっちゃいましたね。ブログの読者さんが増えるのは嬉しいですし、反響があるのも嬉しいことなんですが…。このあたりはブログを書いている人は一度は悩むところかもしれません。
							</p>
							
							<div class="centerAd"><?php echo do_shortcode('[gAd_728]'); ?></div>
							
							<h2>主な登場人物 / ねこ事務所</h2>
							<p>リンあれの中核をなすのがねこ事務所の面々。ねこ事務所なくしてこのブログは生まれてなかったでしょう。<br>ということでねこ事務所の愉快な仲間たちについて。</p>
							
							<div class="necoOffice clearfix">

								<section class="prof clearfix">
									<div class="image yucoImage"></div>
									<h1>ゆこびん（yucovin）</h1>
									<div class="name">name</div>
									<div class="machine">MacBook Pro with Retina display 15"(Core i7 Mid 2014)</div>
									<div class="phone">iPhone 6 Plus(SIM free 128GB Gold)</div>
									<div class="explain">
										<p>このブログの管理人。ねこ事務所のお手伝い１号、フリーのイラストレーター兼デザイナー。ねこ事務所に関わるようになってからデザイン系にありがちなデザインぽいものならなんでもやる赤魔導士の道をまっしぐら（このブログのwordpressテーマも自作のリンあれ仕様）。毎日が夏休みの貧乏暇なし。遊びでも何でも真剣にやりたいタイプ。性格は相当なのんびりストであるが、江戸っ子の血をひくためか、時折せっかちの才能を発揮する事も。</p>
										<p>パソコンというものと無縁の生活を送っていたが、ある日MacBookと出会い、そこから人生が変わる。Macの使い方を教えてくれたネットに（自分の体験を還元することで）恩返ししようと思い、2010年にMacブログを始めた。17インチのMacBook Proを背負って生活しているのが珍しいらしく、「17インチMacBook Pro　＝　ゆこびん」と、ひとつの特徴として捉えられている。ブログを始めてからはMacのトラブルが頻発、Appleの神対応を経験したりと、Appleブロガーとしてネタを引きつける能力がアップしているようである。ありがたいことに、他にもブログを始めた事がきっかけで、Podcastに出させてもらったり、共同メルマガを発行したりと、活動の場が広がっている。そして読者も自分も最大のびっくり(°д°)な事といえば、2014年にAppleのDeveloper向けのイベントWWDCに行き、iOSアプリをリリースした事であろう。（先に書いたように、数年前までプログラムどころかパソコンというものさえ使ってなかったわけで。）現在は自由大学の「アプリクリエイター道場」のアシスタントもしている。趣味はものを作る事、音楽。</p>
									</div>
								</section>
								
								<section class="prof clearfix">
									<div class="image necoImage"></div>
									<h1>ねこ先生</h1>
									<div class="name">name</div>
									<div class="machine">MacBook Pro with Retina display 13"(Core i5 Late 2012)</div>
									<div class="phone">iPhone 5(SoftBank)</div>
									<div class="explain">
										<p>都内某所にあるねこ事務所のボス。Macの優れたUIに惚れ込んでおり、Macしか使いたくない人。Mac歴は長く「恐竜ががおーと言っていた頃」から使っているらしい。<br>【ねこ先生のMac遍歴】<br>（いろんなMac）→（一時期Windows）→ <br>たしか白いiBook → MacBook 黒 (2008)→<br>MacBook Air 13″（Late 2010）→今のマシン。</p>
										<p>人（猫）相が悪いためか、近所の交番で職質されることしばしば（もちろんそこで喧嘩する）。かつてITアナリストをしていたらしいが、知識はそれだけにとどまらず、政治、教育、経済、芸術他、多岐に渡る。メテオとホーリーが同時詠唱出来る究極の賢者（器用貧乏）。"リンあれ"で「ゆこびんでも分かるインターネットの歴史」を気まぐれ連載中（現在、忙しすぎて休止中）。ブログを読んでくれている皆さんの中には、コアなねこ先生ファンがチラホラいるという噂で、ファンクラブ発足の要望も多数ある模様。ちなみに、ねこ先生は記事まで書いているにもかかわらず、（ブログの存在がバレる前に私とした約束により、）"リンあれ"自体読んだことがない。</p>
									</div>
								</section>
								
								<section class="prof clearfix">
									<div class="image ddImage"></div>
									<h1>DD（ディーディー）</h1>
									<div class="name">name</div>
									<div class="machine">自作PC / MacBook Air 11inch（Mid 2011）</div>
									<div class="phone">iPhone 6 (SIM free 128GB)</div>
									<div class="explain">
										<p>ねこ事務所お手伝い2号、難しい（面倒な）PCまわり担当。ゆこびんより後にねこ事務所にやってきたので後輩という事になっている。今時の間違った個人主義者。子どもの頃からパソコンいじりが趣味なITっ子で、プログラミングが得意なのだが、人に教える能力は全くない（気もない）。故に、ゆこびんによくダメ出しをされるが、全くこたえていない若干天然なのらりくらりな人。もう勝ちそうな戦いの終わりに現れてバハムート（召喚獣）を召喚して消えていくようなマイペース人間。最近、アプリ道場の面々にリンあれレギュラーメンバーの座を奪われそうになっているのを危惧している。もっとゆこびん先輩に親切にするといいと思うよ。</p>
									</div>
								</section>
								
								<section class="office clearfix">
									<h1>ねこ事務所</h1>
									<div class="image"><img src="http://rinare.com/wp-content/uploads/image_archive/pro_jimu.jpg" width="auto" height="365" alt="ねこ事務所"></div>
									<p>都内某所にある弱小事務所、ねこ事務所。世の中でのMacのシェアは5%というウワサだが、この事務所内では100％なのである。Macにまつわるドタバタや日々のくだらない事務所での出来事を語るために、"リンあれ"は生まれた、と言っても過言ではない。当初はSoftBankが完全圏外の場所に事務所があったため誰もiPhoneを持っていなかったが、今ではiPhone率も100%になった。ゆこびん専用のiMacもある。ブログが始まってから、管理人だけでなくねこ事務所も進化しているのである。</p><p>最初はねこ事務所の面々には内緒で始めた"リンあれ"であったが（ってか、まわりに宣言してからブログを始める人って少ないと思う…）、一年も経たないうちにクライアントの通報によりねこ先生にブログバレ((((；ﾟДﾟ))))し、Mac Fanのブロガー紹介のページに載った際にDDにも知る事実となった。かくして"リンあれ"は、ねこ事務所公認ブログになり、ますますApple係数が高い事務所を目指していくのであった…。?!（続く）</p>
								</section>
							</div><!-- end.necoOffice -->
							
							
							<?php the_content(); ?>
							<?php edit_post_link(); ?>
							
							
							
						</div><!-- end.entryBody -->
						
						
						<div class="followMeSet clearfix">
							<ul>
								<li class="rss"><a href="<?php echo home_url('/about_rss.html'); ?>" title="リンあれrssフィード"></a></li>
								<li class="feedly"><a href="http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Frinare.com%2Ffeed" target="_blank" title="リンあれfeedly"></a></li>
								<li class="twitter"><a href="https://twitter.com/yucovin" target="_blank" title="ゆこびんtwitterをFollow"></a></li>
								<li class="facebook"><a href="https://www.facebook.com/rinare.yucovin" target="_blank" title="リンあれFacebookページ"></a></li>
								<li class="googlePlus"><a href="https://plus.google.com/113215053096203603042/" target="_blank" title="ゆこびんGooglePlusをFollow"></a></li>
							</ul>
						</div>
						
						
						<div class="tailSet clearfix">
							<div class="setItem">
								<div class="fb-page" data-href="https://www.facebook.com/rinare.yucovin" data-width="300" data-height="130" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/rinare.yucovin"><a href="https://www.facebook.com/rinare.yucovin">もっと知りたいリンゴあれこれ（ユコびん）</a></blockquote></div></div>
							</div>
							<div class="setItem"><div class="g-page" data-href="//plus.google.com/u/0/101691713660925438323" data-showtagline="false" data-rel="publisher"></div></div>
							<div class="setItem"><?php echo do_shortcode('[gAd_300]'); ?></div>
						</div>
						
						
						<?php get_template_part('share', 'tail'); ?>
						
												
						<div class="entryFooter clearfix">
							<time datetime="<?php echo get_post_time('Y-m-d'); ?>">[Last modified] <?php the_modified_time('Y.m.d'); ?> at <?php the_modified_time('H:i'); ?></time>
							<div class="category">rin*are</div>
							<div class="tag">information</div>
							
						</div>
						
						<?php endwhile; ?>
						<!-- end main loop -->
					</article>
					
				</div><!-- end.post -->
				<div class="jaggedUpsideDown"></div>
				
				
				<?php get_template_part('appeal', 'view'); ?>
				
			
			</div><!-- end.wraped -->
		</div><!-- end.content -->

<?php get_footer(); ?>