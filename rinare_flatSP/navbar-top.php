<div id="navbar" class="clearfix">
	<nav>
		<ul>
			<li id="navTop"><a href="<?php echo home_url(); ?>" title="go to site top"></a></li>
			<li id="navInfo" class="clickEvent">
				<ul class="infos" class="clearfix">
					<li class="navAbout"><a href="<?php echo home_url('/about'); ?>" title="about this site"></a></li>
					<li class="navSNS"><a href="<?php echo home_url('/snslist'); ?>" title="yucovin sns list"></a></li>
					<li class="navPrivacy"><a href="<?php echo home_url('/privacypolicy'); ?>" title="Request and Privacy policy"></a></li>
					<li class="navContact"><a href="<?php echo home_url('/contact'); ?>" title="contact with me"></a></li>
				</ul>

			</li>
			<li id="navRSS"><a href="<?php echo home_url('/about_rss'); ?>" title="リンあれrss feed"></a></li>
			<li id="navPC"><a href="?viewmode=pc" title="pc用レイアウトで見る"></a></li>
			<li id="navSearch"><span></span>
				<div id="search">
					<div id="textField">
<!--
					<div id='cse' style='width: 100%;'>…Loading</div>
						<script src='//www.google.com/jsapi' type='text/javascript'></script>
						<script type='text/javascript'>
						google.load('search', '1', {language: 'ja', style: google.loader.themes.GREENSKY});
						google.setOnLoadCallback(function() {
						  var customSearchOptions = {};
						  var orderByOptions = {};
						  orderByOptions['keys'] = [{label: 'Relevance', key: ''} , {label: 'Date', key: 'date'}];
						  customSearchOptions['enableOrderBy'] = true;
						  customSearchOptions['orderByOptions'] = orderByOptions;
						  var imageSearchOptions = {};
						  imageSearchOptions['layout'] = 'google.search.ImageSearch.LAYOUT_POPUP';
						  customSearchOptions['enableImageSearch'] = true;
						  customSearchOptions['overlayResults'] = true;
						  var customSearchControl =   new google.search.CustomSearchControl('018249481112592033638:y8zbmw2ghig', customSearchOptions);
						  customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
						  var options = new google.search.DrawOptions();
						  options.setAutoComplete(true);
						  customSearchControl.draw('cse', options);
						}, true);
						</script>
-->
						<!-- google search -->
						<script>
						  (function() {
						    var cx = '018249481112592033638:y8zbmw2ghig';
						    var gcse = document.createElement('script');
						    gcse.type = 'text/javascript';
						    gcse.async = true;
						    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
						    var s = document.getElementsByTagName('script')[0];
						    s.parentNode.insertBefore(gcse, s);
						  })();
						</script>
						<gcse:search></gcse:search>
					</div><!-- end #textField -->
				</div>
			</li>
		</ul>
		
		<div class="free"></div>
	
	</nav>
</div><!-- end #navbar -->
