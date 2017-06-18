<?php
$url_encode=urlencode(get_permalink());
$title_encode=urlencode(get_the_title());
?>

<div class="shareSNS">
<ul class="clearfix">
<!-- Twitter -->
		<li class="twitter"> 
		<a href="http://twitter.com/share?text=<?php echo $title_encode ?>＊リンあれ&url=<?php echo $url_encode ?>&tw_p=tweetbutton&related=yucovin onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=600');return false;"><i class="fa fa-twitter"></i>Twitter&nbsp;<?php if(function_exists('scc_get_share_twitter')) echo (scc_get_share_twitter()==0)?'':scc_get_share_twitter(); ?></a>
		</li>
		
		<!-- Facebook -->      
		<li class="facebook">       
		<a href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=800,width=1000');return false;"><i class="fa fa-facebook"></i>Facebook&nbsp; <?php if(function_exists('scc_get_share_facebook')) echo (scc_get_share_facebook()==0)?'':scc_get_share_facebook(); ?></a>
		</li>
		
		<!-- Google+1 -->
		<li class="googleplus">
		<a href="https://plus.google.com/share?url=<?php echo $url_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=500');return false;"><i class="fa fa-google-plus"></i>Google+&nbsp;<?php if(function_exists('scc_get_share_gplus')) echo (scc_get_share_gplus()==0)?'':scc_get_share_gplus(); ?></a>
		</li>
		
		<!-- はてブ -->  
		<li class="hatebu"> 
		<a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url_encode ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=510');return false;" ><i class="fa fa-hatena"></i>はてブ&nbsp; <?php if(function_exists('scc_get_share_hatebu')) echo (scc_get_share_hatebu()==0)?'':scc_get_share_hatebu(); ?></a>
		</li>
     
		<!-- pocket -->      
		<li class="pocket">
		<a href="http://getpocket.com/edit?url=<?php echo $url_encode;?>&title=<?php echo $title_encode;?>" target="blank"><i class="fa fa-get-pocket"></i>Pocket&nbsp; <?php if(function_exists('scc_get_share_pocket')) echo (scc_get_share_pocket()==0)?'':scc_get_share_pocket(); ?></a></li>

		<!-- feedly -->
		<li class="feedly">
		<a href="https://feedly.com/index.html#subscription%2Ffeed%2Fhttps%3A%2F%2Frinare.com%2Ffeed%2F"  target="blank"><i class="fa fa-rss"></i>feedly&nbsp; <?php if(function_exists('scc_get_follow_feedly')) echo (scc_get_follow_feedly()==0)?'':scc_get_follow_feedly(); ?></a></li>    
</ul>  
</div>