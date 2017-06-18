<div id="footernav">
	<!-- カテゴリメニュー　＋α -->
	<nav id="catelistPlus">
	<ul>
		<li class="apple left short cat"><a href="<?php echo home_url('/category/apple'); ?>" title="Apple">Apple</a></li>
		<li class="iphone right long cat"><a href="<?php echo home_url('/category/iphone_ipad_gadget'); ?>" title="iPhone+iPad+Gadget">iPhone + iPad + Gadget</a></li>
		<li class="mac left long cat"><a href="<?php echo home_url('/category/mac'); ?>" title="Mac+App+Peripheral">Mac + App + Peripheral</a></li>
		<li class="dev right long cat"><a href="<?php echo home_url('/category/web_develop_illust'); ?>" title="Development+Web+Design+Illustration">Developm + Web + Design + Illust</a></li>
		<li class="diary left short cat"><a href="<?php echo home_url('/category/diary'); ?>" title="Diary+Trivia">Diary + Trivia</a></li>
		<li class="illustTag right short tag"><a href="<?php echo home_url('/tag/with_illust'); ?>" title="Post with Illustration">イラスト入り記事</a></li>
	</ul>
	
	<div class="allTags"><a href="<?php echo home_url('/taglist'); ?>" title="show all tags">タグ一覧を見る/show all tags</a></div>
	</nav>
	

	<!-- メニューバー　上とほぼ一緒のもの -->
	<?php get_template_part('navbar', 'tail'); ?>
	
</div>



<footer id="footer">
	<div id="copyright">
		<small>
		Copyright 2010 <a href="https://rinare.com/" title="もっと知りたいリンゴあれこれ">もっと知りたいリンゴあれこれ</a> All Rights Reserved.<br>Theme by yucovin<br>Powered by <a href="https://ja.wordpress.org" target="_blank" title="WordPress日本語">WordPress</a>　<a href="https://px.a8.net/svt/ejp?a8mat=1ZXKFN+4M3YK2+CO4+6AZAQ" target="_blank">Xserver</a><img border="0" width="1" height="1" src="https://www14.a8.net/0.gif?a8mat=1ZXKFN+4M3YK2+CO4+6AZAQ" alt="">　<a href="https://px.a8.net/svt/ejp?a8mat=1U5FCW+DD29KI+50+2HHVNM" target="_blank">お名前.com</a><img border="0" width="1" height="1" src="https://www19.a8.net/0.gif?a8mat=1U5FCW+DD29KI+50+2HHVNM" alt="">
		</small>
	</div>
</footer>
		
		
		
<!-- スマフォ用フロートnav、カテゴリ -->
<div id="floatNav">
	<ul>
		<li class="iphone"><a href="<?php echo home_url('/category/iphone_ipad_gadget'); ?>" title="iPhone+iPad+Gadget"></a></li>
		<li class="mac"><a href="<?php echo home_url('/category/mac'); ?>" title="Mac+App+Peripheral"></a></li>
		<li class="apple"><a href="<?php echo home_url('/category/apple'); ?>" title="Apple"></a></li>
		<li class="dev"><a href="<?php echo home_url('/category/web_develop_illust'); ?>" title="Development+Web+Design+Illustration"></a></li>
		<li class="diary"><a href="<?php echo home_url('/category/diary'); ?>" title="Diary+Trivia"></a></li>
	</ul>
</div>


	
		
</div><!-- end#container -->
	
<?php wp_footer(); ?>
	

<script language="JavaScript" src="<?php echo get_template_directory_uri(); ?>/js/accordion.js" type="text/javascript"></script>


<!-- Twitter -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<!-- Facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.async = true;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.8&appId=199603450527395";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- google＋最後の +1 ボタン タグの後に次のタグを貼り付けてください。 -->
<script type="text/javascript">
  window.___gcfg = {lang: 'ja'};
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<!-- はてぶ -->
<script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button_wo_al.js" charset="utf-8" async="async"></script>

<!-- Pocket -->
<script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script>

<!-- Auto Link Maker iTunes-->
<script type='text/javascript'>var _merchantSettings=_merchantSettings || [];_merchantSettings.push(['AT', '11l7eo']);(function(){var autolink=document.createElement('script');autolink.type='text/javascript';autolink.async=true; autolink.src='https://autolinkmaker.itunes.apple.com/js/itunes_autolinkmaker.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(autolink, s);})();</script>


		
</body>
</html>