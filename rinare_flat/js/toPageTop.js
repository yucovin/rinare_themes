//wordpressでjQueryの$を使う時は囲うこと
jQuery(function( $ ) {


$(document).ready(function(){
	
	//ボタン出現させるスクロールイベント
	$(window).scroll(function(){
	//上部から現在位置までの距離を取得して変数に
		var present = $(window).scrollTop();
		
		//最下部から現在位置までの距離を変数に
		var toFooter = $('body').height() - (present + $(window).height());
		
		if(present > 1500 && toFooter > 500){
			//ゆっくりフェードインする
			$('#toPageTop').fadeIn('slow');
		}else{
			//それ以外だったらフェードアウトする
			$('#toPageTop').fadeOut('slow');
		}
	});

	//ボタン(id:moveTo)のクリックイベント
	$('#moveTo').click(function(){
		//ページトップへ移動する
		$('html,body').animate({scrollTop:0},'slow');
	});

});


});