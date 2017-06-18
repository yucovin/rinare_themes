<html>
<head>	
<style type="text/css">  
<!--

#navCategory {
				font-family: $codeFont;
				font-size: 2.0rem;
				float: left;
				text-align: center;
				
				margin: 0 10px 0 0;
				> a {
					display: block;
					background-color: $baseColor;
					color: $tintColor;
					width: 130px;
					line-height: 36px;
					border: 1.5px solid $tintColor;
					border-radius: 19px;
					box-shadow: 1px 1px 2px rgba(0,0,0, .5);
					&:hover {
						box-shadow: inset 1px 1px 3px rgba(0, 0, 0, .7);
						color: $titleColor;
					}
				}
				position: relative;
				/* z-index: 0; */
				ul {
					position: absolute;
					top: 0;
					left: 0;
					width: 130px;
					
					li {
						position: absolute;
						top: -1px;
						left: 46px;
						overflow: hidden;
						z-index: 2;/*後の要素の下に隠れないため。逆に-1なんかにしてulの下にすることも*/
						width: 40px;
						height: 40px;
						opacity: 0;

						-moz-transition: .4s ease-in;
						-webkit-transition: .4s ease-in;
						-o-transition: .4s ease-in;
						-ms-transition: .4s ease-in;
						transition: .4s ease-in;
						a {
							background-color: rgba(255, 216, 216, 0.8);
							display: block;
							width: 30px;
							height: 30px;
							margin: 5px;
							border-radius: 50%;
							font-size: 0.3rem;
							box-shadow: 1px 1px 5px rgba(0,0,0, .5);
						}
					}	
				}
				@-webkit-keyframes cate1Action {
					0% {-webkit-transform: translate(0px, 0px) scale(1);}
					35% {-webkit-transform: translate(-89px, 20px) scale(4);}
					60% {-webkit-transform: translate(-89px, 20px) scale(2.4);}
					80% {-webkit-transform: translate(-89px, 20px) scale(3.4);}
					100% {-webkit-transform: translate(-89px, 20px) scale(3);}
				}
				@-webkit-keyframes fadeIn {
					0% {opacity: 0;}
					50% {opacity: 1;}
					100% {opacity: 1;}
				}
				/*アニメで。Safari、Chromeはhoverを外したらなくなる、Firefoxはゆっくりもどる*/
				&:hover ul .apple {
					-webkit-animation-name: cate1Action,fadeIn;
					-webkit-animation-duration: 0.5s;
					-webkit-animation-timing-function: ease-out;
				    -webkit-animation-iteration-count: 1;
				    -webkit-animation-fill-mode: forwards;
				}
				/*transformで。hoverを外すとゆっくり戻る　そのかわり複雑なうごきはできない*/
				&:hover ul .iphone {
					transform: translate(-53px, -81px) scale(3);
					opacity: 1;
				}
				&:hover ul .mac {
					transform: translate(53px, -81px) scale(3);
					opacity: 1;
				}
				&:hover ul .dev {
					transform: translate(0px, 81px) scale(3);
					opacity: 1;
				}
				&:hover ul .diary {
					transform: translate(89px, 20px) scale(3);
					opacity: 1;
				}
			}
	
-->  
</style>	
</head>	
<body>	
	<nav>
					<ul>
						<li id="navTop" class="normal"><a href="<?php echo home_url(); ?>" title="site top">Top</a></li>
						<li id="navCategory"><a href="<?php echo home_url(); ?>/cate_list" title="category list">Category</a>
							<ul>
								<li class="apple"><a href="#">Apple</a></li>
								<li class="iphone"><a href="#">iPhone+iPad</a></li>
								<li class="mac"><a href="#">mac+App</a></li>
								<li class="dev"><a href="#">development+web</a></li>
								<li class="diary"><a href="#">Diary</a></li>
								<!-- <li><a href="#">show all tags</a></li> -->
							</ul>
						</li>
						<li id="navAbout" class="normal"><a href="<?php echo home_url(); ?>/about" title="about this site">About</a></li>
						<li id="navContact" class="normal"><a href="<?php echo home_url(); ?>/contact" title="contact">Contact</a></li>
					</ul>
				</nav>
</body>	
</html>