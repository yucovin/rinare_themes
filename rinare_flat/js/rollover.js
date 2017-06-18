/* Rollover Script */

if(navigator.appVersion.charAt(0) >=3){
var rolimg = new Array();
for( i = 0 ; i < 10 ; i++ ){
rolimg[i] = new Image();
}

// ロールオーバー前のイメージのパス
rolimg[0].src= "https://rinare.com/wp-content/themes/rinare_flat/images/siteImageTransparent.png"
// クリッカブルマップでロールオーバーさせるイメージ1のパス
rolimg[1].src= "https://rinare.com/wp-content/themes/rinare_flat/images/siteImageYuco.png"
// クリッカブルマップでロールオーバーさせるイメージ2のパス  
rolimg[2].src= "https://rinare.com/wp-content/themes/rinare_flat/images/siteImageNeco.png"
// クリッカブルマップでロールオーバーさせるイメージ3のパス  
rolimg[3].src= "https://rinare.com/wp-content/themes/rinare_flat/images/siteImageDD.png"
}

function paintRol(dim,cnt){
if(navigator.appVersion.charAt(0) >= 3 ){
document.images[dim].src=rolimg[cnt].src;
}
}