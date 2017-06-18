<div id="sidebar">
				
	<!-- adSideTop -->
	<div class="sideAd"><?php echo do_shortcode('[gAd_300]'); ?></div>
	<aside class="sideBox">
		<h1>お願いとプライバシーポリシー</h1>
		<p>●このブログのイラスト及び写真の無断転載や加工、二次配布を禁止します。文章を引用する場合はこのブログからの引用であることがわかるよう明記して下さい。引用を超えて転載する場合は上部contactから連絡して下さい。（紹介記事、それに類するものの場合はこれにあたりません。その場合のイラストの加工は原型が分かる程度でお願いします。）<br>●このブログの<a href="https://rinare.com/privacypolicy" title="プライバシーポリシー" target="_self">プライバシーポリシーはこちら</a>。</p>
	</aside>
	
	<aside class="sideBox">
		<h1>ギフトで応援</h1>
		<p>私（ゆこびん／佐久間にの）のアプリやブログで公開しているものがお役に立ったりなどして、私の活動を応援したいと思ってくださる方は<a href="https://www.amazon.co.jp/gp/registry/wishlist/QTN9CA27EO05/ref=cm_wl_list_o_1?sort=universal-price&view=null" title="ゆこびん応援Amazonギフトリスト" target="_blank">Amazonギフト</a>からお願いします。プログラミングやデザインのスキルアップのための書籍や絵を描くための道具、文房具など、快適な作業環境作りに使わせていただきます！<br>
			<a href="https://www.amazon.co.jp/gp/registry/wishlist/QTN9CA27EO05/ref=cm_wl_list_o_1?sort=universal-price&view=null" title="ゆこびん応援Amazonギフトリスト" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/amazongift.jpg" width="300" height="100" alt="Amazonギフトで応援イメージ"></a>
		</p>
	</aside>
	
	
	<aside class="sideBox">
		<h1>記事一覧リンク</h1>
		<h2>list of All Posts</h2>
		<p>今までの記事を全タイトルをサムネル付きで</p>
		▶<a href="https://rinare.com/all_entry" title="リンあれ記事タイトル一覧" target="_self">全タイトル一覧</a>
		
		<h2>Categories</h2>
		<ul><?php wp_list_categories('show_count=>True'); ?></ul>
		
		<h2>Monthly Archive</h2>
		<div class="monthArchive">
			<ul><?php wp_get_archives( 'type=monthly&show_post_count=True' ); ?></ul>
		</div>
	</aside>
	
	<aside class="sideBox">
		<h1>初心者向けiOSアプリ開発講座</h1>
		<div class="sideAd"><a href="http://egg-is-world.com/category/iphone-app-development-lecture/" title="「アプリクリエイター道場」関連記事一覧" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/bannerAppDojo01.jpg" width="300" height="250" alt="「アプリクリエイター道場」"></a></div>
		<p>少人数制の未経験向けiPhoneアプリ開発講座「アプリクリエイター道場（略してアプリ道場）」のアシスタント・キュレーターをしています。アプリを作れるようになりたいプログラミング未経験者さん、独学で挫折した人やエンジニアさんとのコミュニケーションのためiOSアプリのプログラミングを学びたい人など、今までいろいろな方が受講されています。ヽ('ヮ'*)ゝ現在、東京と大阪で定期開催されています。<br>
			（上の画像をクリックすると講師ブログのアプリ道場関連記事一覧にとび、今後の開講予定や卒業生インタビューなどがチェックできます。）</p>
	</aside>

	
	
	<!-- Facebook like box-->
	<div class="fb-page" data-href="https://www.facebook.com/rinare.yucovin" data-width="300" data-height="130" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/rinare.yucovin"><a href="https://www.facebook.com/rinare.yucovin">もっと知りたいリンゴあれこれ（ユコびん）</a></blockquote></div></div>
	
	<div class="gBadge">
		<div class="g-page" data-href="//plus.google.com/u/0/101691713660925438323" data-layout="landscape" data-rel="publisher"></div>
	</div>
	
		
	
	<!-- adRakuten -->
		
	
	<aside class="scroll">
		<div class="sideGaggedHead"></div>
		<div class="apps">
		<h1>App on Apple</h1>
		<!-- スクロールでついてくるやつ -->
		<p>iPhoneアプリをリリースしました。文字組み（組版）を始めたばかりの人、文字ばかり扱ってるわけではないデザイナーさんのためのアプリです。Q（級）やH（歯）をptや他の単位に自動変換。行送りも含め印刷した際の実寸プレビューが見られます。いくつかの便利なガイド計算機も付いています。</p>
		<div class="myApp clearfix">
		<a href="https://itunes.apple.com/jp/app/qhpt-bian-huan-purebyudekirudtp/id926191092?l=ja&ls=1&mt=8" title="QHpt変換 -プレビューできるDTP組版計算機" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/qhpt180.png" width="100" height="100" alt="QHpt変換 -プレビューできるDTP組版計算機"><p>●QHpt変換<br> -プレビューできるDTP組版計算機<br>無料</p></a>
		</div>
		<p>管理人おススメ＆愛用アプリいろいろです<br>リロードする毎に入れ替わります(๑´ㅂ`๑)</p>
		<ul class="applist">
		 <?php wp_list_bookmarks('orderby=rand&limit=5&category_orderby=name&category=218,217,215,216&title_li=&show_images=1&show_description=0'); ?>
		 <?php wp_list_bookmarks('orderby=rand&limit=10&category_orderby=name&category=219,160&title_li=&show_images=1&show_description=0'); ?>
		</ul>
		</div>
		<div class="sideGaggedTail"></div>
	</aside>

</div><!-- end.sidebar -->
