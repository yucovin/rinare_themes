<?php
/*
Template Name: About
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
						<div class="date"><span>About Rin*are</span></div>
						<div class="category">rin*are information</div>
						
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					</div>
					
					<?php get_template_part('share', 'sns'); ?>
					<div class="ad300"><?php echo do_shortcode('[gAd_300top]'); ?></div>
					
					<div class="entryBody">
						<p>「もっと知りたいリンゴあれこれ」は、Macと出会い人生がちょっと（だいぶ？）変わった管理人ゆこびんとその愉快な仲間たちの日常を綴るゆるい絵日記Appleブログです。読者の方々は略して「リンあれ」と呼んでくれています。月間25万PV。<br>
							Apple関連、Mac、iPhone、iPadの話を中心にガジェット（AndroidはでっかいモバイルSuica）など、備忘録やまつわる出来事を書いています。他にはWeb制作、アプリ開発の話、たまに全く私的な日記風なものもあります。</p>
						<p>ブログを読み始めてくれたばかりの人たちからわりとよく「ねこ先生（や他の登場人物）は本当にいるのか？　ブログの話はどこまで本当なのか？」と尋ねられることがあります。リンあれは基本ノンフィクションで、実在する人たちの実際起きたエピソードが描かれています。（ねこ先生が猫の姿をしていたり、名前が実名ではなくハンドルネームや愛称だったりというフィクションなところは一部ありますが）</p>
						<p>それではリンあれに出てくるゆこびん周辺のAppleな人々を少しばかり紹介しましょう。スマフォから見てくれている方は、ピンチアウトで拡大しながら見てくださいね(๑❛ω❛๑)</p>
							
						<img src="<?php echo get_template_directory_uri(); ?>/images/correlation.png" width="988" height="auto" alt="リンあれ相関図">
						<p>こんな人たちが「リンあれ」に登場しています。（他にも登場している人もいるので一部だけですが。）中には、登場回数1.5回（しかも超初期に）しかないのに読者さんから絶大な人気をほこるジョージ（仮名）なんてのもいます。でも、「ブログに登場したスタッフさんと思われる人をApple storeで見かけたので声をかけた」という読者さんがいらして…途中からApple Storeでのエピソードはブログには書きづらくなっちゃいました。ブログの読者さんが増えるのは嬉しいですし、反響があるのも嬉しいことなんですが…。このあたりはブログを書いている人は一度は悩むところかもしれません。まだまだ続くよ！次は主要人物とりんあれのブログ歴など！↓</p>
						
						<div class="ad320"><?php echo do_shortcode('[gAd_320x100]'); ?></div>
						
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
										<p>このブログの管理人（ってか私だ！）。フリーのイラストレーター兼デザイナーのiSOデベロッパー（Swift）。ねこ事務所（後述）に関わるようになってからデザイン系にありがちなデザインぽいものならなんでもやる赤魔導士の道をまっしぐら（このブログのwordpressテーマも自作）。最近ではiOSデベロッパーとしてコードも書いているので、職業欄に何を書けばいいのかいつも悩んでいる。<br>
毎日が夏休みの貧乏暇なし。遊びでも何でも真剣にやりたいタイプ。性格は相当なのんびりストであるが、江戸っ子の血をひくためか、時折せっかちの才能を発揮する事も。趣味はものを作る事、音楽。ねこ事務所のお手伝い１号。未経験者向けのiPhoneアプリ開発講座<a href="http://app-dojo.jp/" target="_blank" title="アプリクリエイター道場">「アプリクリエイター道場」</a>アシスタント講師。<a href="http://app-dojo.mookmookradio.com/" target="_blank" title="ｍookmook Radio「パソ爺とゆこびんのアプリ道場」">ｍookmook Radio</a>のパーソナリティも務めている。</p>
										<p>［ブログを始めた経緯とブログでの出来事］<br>
パソコンというものと無縁の生活を送っていたが、ある日MacBookと出会ったことで人生が変わる。Macの使い方を教えてくれたネットに（自分の体験を還元することで）恩返ししようと思い、2010年にMacブログを始めた。17インチのMacBook Proを背負って生活しているのが珍しかったようで、いつしか17インチMacBook Proがブログとゆこびんのトレードマークに（現在は17インチがディスコンのため15インチのMacBook Proを使っている）。ブログを始めてからというものMacのトラブルが頻発。Appleの神対応を経験したりと、Appleブロガーとしてネタを引きつける能力がアップしているようである。ブログきっかけでPodcastに出演したり、人気ブロガーさんたちと共同メルマガを発行したりと、活動の場が広がっていった。そして読者も本人も最大のびっくり(°д°)な事件が2014年に起こる。なんとAppleのDeveloper向けのカンファレンス（イベント）WWDCに行き、iOSアプリをリリースしたのである。（先に書いたように、この事件の数年前までプログラムどころかパソコンというものさえ使ってなかったわけで。）その後順調に？時はながれiOSのプログラマーとしてもお仕事をするようになった。ビックカメラにWindowsを買いに行ったはずが「かわいいデザインのマシンがない！ じゃぁMacにするかー」ってことで、MacBookを選んだだけだったのに、こんなことになるとは…( •̀ㅁ•́;)　人生わからないものである。ちなみに2017年もWWDCに参加した。</p>
									</div>
								</section>
								
								<section class="prof clearfix">
									<div class="image necoImage"></div>
									<h1>ねこ先生</h1>
									<div class="name">name</div>
									<div class="machine">MacBook Pro with Retina display 13"(Core i5 Mid 2014)</div>
									<div class="phone">iPhone 7 (PRODUCT) RED</div>
									<div class="explain">
										<p>都内某所にあるねこ事務所のボス。Macの優れたUIに惚れ込んでおり、Macしか使いたくない人。Mac歴は長く「恐竜ががおーと言っていた頃」から使っているらしい。<br>【ねこ先生のMac遍歴】<br>（いろんなMac）→（一時期Windows）→ <br>たしか白いiBook → MacBook 黒 (2008)→<br>MacBook Air 13"（Late 2010）→ MacBook Pro with Retina display 13"(Core i5 Late 2012) → 今のマシン。</p>
										<p>人（猫）相が悪いためか、近所の交番で職質されることしばしば（もちろんそこで喧嘩する）。かつてITアナリストをしていたらしいが、知識はそれだけにとどまらず、政治、教育、経済、芸術他、多岐に渡る。メテオとホーリーが同時詠唱出来る究極の賢者（器用貧乏ともいう）で、ゆこびんの目標の存在。"リンあれ"で「ゆこびんでも分かるインターネットの歴史」を気まぐれ連載中（現在、忙しすぎて休止中）。ブログを読んでくれている皆さんの中には、コアなねこ先生ファンがチラホラいるという噂で、ファンクラブ発足の要望も多数ある模様。ちなみに、ねこ先生はこのブログに記事まで書いてくれているにもかかわらず、（ブログの存在がバレる前に私とした約束により、）"リンあれ"自体読んだことがない。</p>
									</div>
								</section>
								
								<section class="prof clearfix">
									<div class="image ddImage"></div>
									<h1>DD（ディーディー）</h1>
									<div class="name">name</div>
									<div class="machine">自作PC</div>
									<div class="phone">iPhone 7 ?</div>
									<div class="explain">
										<p>ねこ事務所お手伝い2号、難しい（面倒な）PCまわり担当。ゆこびんより後にねこ事務所にやってきたので後輩という事になっている。今時の間違った個人主義者。子どもの頃からパソコンいじりが趣味なITっ子で、プログラミングが得意なのだが、人に教える能力は全くない（気もない）。故に、ゆこびんによくダメ出しをされるが、全くこたえていない若干天然なのらりくらりな人。もう勝ちそうな戦いの終わりに現れてバハムート（召喚獣）を召喚して消えていくようなマイペース人間。アプリ道場の面々にリンあれレギュラーメンバーの座を奪われそうになっているのを危惧していたが、ねこ事務所卒業という形で自らレギュラーの座を去ったのであった。ばいばいDD! たまにはねこ事務所に遊びに来てね！</p>
									</div>
								</section>
								
								<section class="office clearfix">
									<h1>ねこ事務所</h1>
									<div class="image"><img src="https://rinare.com/wp-content/uploads/image_archive/pro_jimu.jpg" width="auto" height="365" alt="ねこ事務所"></div>
									<p>都内某所にある弱小事務所、ねこ事務所。世の中でのMacのシェアは5%というウワサだが、この事務所内では100％。ねこ事務所内で起こるMacにまつわるドタバタや日々のくだらない出来事を語るために、"リンあれ"は生まれた、と言っても過言ではない。当初はSoftBankが完全圏外の場所に事務所があったため誰もiPhoneを持っていなかったが、事務所は引っ越しをし、今ではiPhone率も100%になった。ゆこびん専用のiMacもやってきた。ブログが始まってから、管理人だけでなくねこ事務所も進化しているのである。</p><p>最初はねこ事務所の面々には内緒で始めた"リンあれ"であったが（ってか、まわりに宣言してからブログを始める人って少ないと思う…）、一年も経たないうちにクライアントの通報によりねこ先生にブログバレ((((；ﾟДﾟ))))し、Mac Fanのブロガー紹介のページに載った際にDDにも知る事実となった。かくして"リンあれ"は、ねこ事務所公認ブログになり、ますますApple係数が高い事務所を目指していくのであった…。?!（続く）</p>
								</section>
							</div><!-- end.necoOffice -->
						
						<?php the_content(); ?>
						<?php edit_post_link(); ?>
					</div>
					
					<!-- Facebook like -->
					<div class="fbpLike">
						このブログがお役に立ったり楽しんでもらえたら「いいね！」お願いします(๑⁰ 〰⁰)<br>
						<div class="fb-page" data-href="https://www.facebook.com/rinare.yucovin/" data-width="300" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/rinare.yucovin/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/rinare.yucovin/">もっと知りたいリンゴあれこれ（ユコびん）</a></blockquote></div>
					</div>
					<!-- entryTailAd -->
					<div class="ad300"><?php echo do_shortcode('[gAd_300entry]'); ?></div>
					
					<div class="sharePlease">シェアしてくれると嬉しいです(*´ー｀*) </div>
					<?php get_template_part('share', 'sns'); ?>
					
					
					<div class="followMeSet clearfix">
						<ul>
							<li class="rss"><a href="<?php echo home_url('/about_rss'); ?>" title="リンあれrssフィード"></a></li>
							<li class="feedly"><a href="https://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Frinare.com%2Ffeed" target="_blank" title="リンあれfeedly"></a></li>
							<li class="twitter"><a href="https://twitter.com/yucovin" target="_blank" title="ゆこびんtwitterをFollow"></a></li>
							<li class="facebook"><a href="https://www.facebook.com/rinare.yucovin" target="_blank" title="リンあれFacebookページ"></a></li>
							<li class="googlePlus"><a href="https://plus.google.com/113215053096203603042/" target="_blank" title="ゆこびんGooglePlusをFollow"></a></li>
						</ul>
					</div>

					
					
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
						<time datetime="<?php echo get_post_time('Y-m-d'); ?>"><?php echo get_post_time('Y  m/d D. H:i'); ?></time>
						<div class="lastModify">[Last modified] <?php the_modified_time('Y.m.d'); ?></div>
						<div class="category">rin*are information</div>
						
					</div>
					
					<?php endwhile; ?>
					<!-- end main loop -->
					
				</article>
			</div><!-- end.post -->
			
			<div class="jaggedUpsideDown"></div>
			
			
						
			<?php get_template_part('appeal', 'myApp'); ?>
			
			
			<?php get_template_part('appeal', 'appdojo'); ?>
						
			
		
		</div><!-- end#content -->
		
<?php get_footer(); ?>		