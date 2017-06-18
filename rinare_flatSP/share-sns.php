<div class="share clearfix">
	
	<!-- Twitter -->
		<div class="twitter sns">
		<a href="https://twitter.com/share" class="twitter-share-button" data-text="<?php the_title(); ?>＊リンあれ" data-lang="en" data-related="yucovin" data-count="vertical" data-size="">tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
	
	<!-- Facebook -->
	<div class="facebook sns">
		<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="box_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
	</div>
	
	<!-- Google+ -->
	<div class="googleplus sns">
		<!-- +1 ボタン を表示したい位置に次のタグを貼り付けてください。 -->
		<div class="g-plusone" data-size="tall"></div>
		<!-- 最後の +1 ボタン タグの後に次のタグを貼り付けてください。 -->
		<script type="text/javascript">
		  window.___gcfg = {lang: 'ja'};
		
		  (function() {
		    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		    po.src = 'https://apis.google.com/js/plusone.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>
		</div>
	
	<!-- はてブ -->
	<div class="hatebu sns">
		<a href="https://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title(); ?>" data-hatena-bookmark-layout="vertical" data-hatena-bookmark-lang="en" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
	</div>
	
	<!-- Pocket -->
	<div class="pocket sns">
	    <a data-pocket-label="pocket" data-pocket-count="vertical" class="pocket-btn" data-lang="en"></a>
		<script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script>
	</div>

</div><!-- end.shareTail-->
