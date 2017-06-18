//wordpressでjQueryの$を使う時は囲うこと
jQuery(function( $ ) {


$(function(){
	
	//About/infoメニュー
    $('.clickEvent').on('click', function() {
        $(this).toggleClass('open');
    });
    
    //　マウスカーソルの位置（navとそのul内、それ以外）
	$('.clickEvent, .clickEvent li').hover(function(){
		onNavArea = true;
		}, function(){
		onNavArea = false;
	});
	
	// 外をクリックしたらopenを外す
	$('body').click(function() {
		if (onNavArea == false) {
		  $('.clickEvent').removeClass('open');
		}
	});
    
    
    
    //Searchメニュートグル
    $('#navSearch span').on('click', function() {
        $('#textField').slideToggle('fast');
        $('#navSearch span').toggleClass('open');
        $('#navbar .free').slideToggle('fast');
    });
    
    $('#search, #navSearch span').hover(function(){
		onSearchArea = true;
		}, function(){
		onSearchArea = false;
	});
	
	$('body').click(function() {
		if (onSearchArea == false) {
		  $('#textField').slideUp('fast');
		  $('#navSearch span').removeClass('open');
		  $('#navbar .free').slideUp('fast');
		}
	});
	
	//floatNavのクリックイベント
	$('#floatNav').click(function(){
        $('#floatNav ul').toggleClass('open');
    });
	
	$('#floatNav, #floatNav li').hover(function(){
		onfloArea = true;
		}, function(){
		onfloArea = false;
	});
	
	$('body').click(function() {
		if (onfloArea == false) {
		  $('#floatNav ul').removeClass('open');
		}
	});
	
	
	//ボタン(id:moveTo)のクリックイベント
	$('#moveTo').click(function(){
		//ページトップへ移動する
		$('html,body').animate({scrollTop:0},'slow');
	});
	
	
});


});