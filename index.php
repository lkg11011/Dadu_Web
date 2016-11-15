<?php
	session_start();
?>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
	<title>Welcome To Dadu</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="landing">

	<!-- Header -->
	<header id="header" class="alt">
		<!--<h1><strong><a href="index.html">Spatial</a></strong> by Templated</h1>-->
		<nav id="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="food.php">Food</a></li>
				<li><a href="attraction.php">Attraction</a></li>
				<li><a href="photo.php">Photo</a></li>
				<li><a href="accommodation.php">Accommodation</a></li>
				<li><a href="contactUs.php">Contact us</a></li>
				<li><a href="travelAdvice.php">Travel advice</a></li>
				<?php 
					if(!isset($_SESSION['level'])) {
				?>
				<li><a href="login.php">Login</a></li>
				<?php
					} else {
				?>
				<li><a href="login/logout.php">Logout</a></li>
				<?php
					}
				?>
			</ul>
		</nav>
	</header>

	<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

	<!-- Banner -->
	<section id="banner">
		<br><br><br>
		<h2>Travel To Dadu</h2>
		<p>假日想出門又不想人擠人嗎<br>那就到大肚來趟輕旅行<br>少了聳立的高樓大廈及汽機車的喧囂聲<br>多了綠油油的稻田及悅耳的蟲鳴鳥叫</p>
		<ul class="actions">
			<li><a href="#start" class="button special big">Get Started</a></li>
		</ul>
	</section>

	<!-- One -->
	<section id="one" class="wrapper style1">
		<div class="container 75%">
			<div class="row 200%">
				<div class="6u 12u$(medium)">
					<header class="major"  id="start">






						<!--------相片輪播部分--------->
						<!-- #region Jssor Slider Begin -->

						<!-- Generator: Jssor Slider Maker -->
						<!-- Source: http://www.jssor.com/demos/simple-fade-slideshow.slider -->

						<!-- This demo works with jquery library -->

						<script type="text/javascript" src="assets/js/jquery.min.js"></script>
						<script type="text/javascript" src="assets/js/jssor.slider-21.1.5.mini.js"></script>
						<!-- use jssor.slider-21.1.5.debug.js instead for debug -->
						<script>
							jQuery(document).ready(function($) {

								var jssor_1_SlideshowTransitions = [{
									$Duration: 1200,
									$Opacity: 2
								}];

								var jssor_1_options = {
									$AutoPlay: true,
									$SlideshowOptions: {
										$Class: $JssorSlideshowRunner$,
										$Transitions: jssor_1_SlideshowTransitions,
										$TransitionsOrder: 1
									},
									$ArrowNavigatorOptions: {
										$Class: $JssorArrowNavigator$
									},
									$BulletNavigatorOptions: {
										$Class: $JssorBulletNavigator$
									}
								};

								var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

								//responsive code begin
								//you can remove responsive code if you don't want the slider scales while window resizing
								function ScaleSlider() {
									var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
									if (refSize) {
										refSize = Math.min(refSize, 600);
										jssor_1_slider.$ScaleWidth(refSize);
									}
									else {
										window.setTimeout(ScaleSlider, 30);
									}
								}
								ScaleSlider();
								$(window).bind("load", ScaleSlider);
								$(window).bind("resize", ScaleSlider);
								$(window).bind("orientationchange", ScaleSlider);
								//responsive code end
							});
						</script>

						<style>
							/* jssor slider bullet navigator skin 05 css */
							/*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
							
							.jssorb05 {
								position: absolute;
							}
							
							.jssorb05 div,
							.jssorb05 div:hover,
							.jssorb05 .av {
								position: absolute;
								/* size of bullet elment */
								width: 16px;
								height: 16px;
								background: url('img/b05.png') no-repeat;
								overflow: hidden;
								cursor: pointer;
							}
							
							.jssorb05 div {
								background-position: -7px -7px;
							}
							
							.jssorb05 div:hover,
							.jssorb05 .av:hover {
								background-position: -37px -7px;
							}
							
							.jssorb05 .av {
								background-position: -67px -7px;
							}
							
							.jssorb05 .dn,
							.jssorb05 .dn:hover {
								background-position: -97px -7px;
							}
							/* jssor slider arrow navigator skin 12 css */
							/*
        .jssora12l                  (normal)
        .jssora12r                  (normal)
        .jssora12l:hover            (normal mouseover)
        .jssora12r:hover            (normal mouseover)
        .jssora12l.jssora12ldn      (mousedown)
        .jssora12r.jssora12rdn      (mousedown)
        */
							
							.jssora12l,
							.jssora12r {
								display: block;
								position: absolute;
								/* size of arrow element */
								width: 30px;
								height: 46px;
								cursor: pointer;
								background: url('img/a12.png') no-repeat;
								overflow: hidden;
							}
							
							.jssora12l {
								background-position: -16px -37px;
							}
							
							.jssora12r {
								background-position: -75px -37px;
							}
							
							.jssora12l:hover {
								background-position: -136px -37px;
							}
							
							.jssora12r:hover {
								background-position: -195px -37px;
							}
							
							.jssora12l.jssora12ldn {
								background-position: -256px -37px;
							}
							
							.jssora12r.jssora12rdn {
								background-position: -315px -37px;
							}
						</style>


						<div id="jssor_1" style="position: relative; margin: 30px auto; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; visibility: hidden;">
							<!-- Loading Screen -->
							<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
								<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
								<div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
							</div>
							<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
								<div data-p="112.50" style="display: none;">
									<img data-u="image" src="images/homePagePicture1_Small.jpg" />
								</div>
								<div data-p="112.50" style="display: none;">
									<img data-u="image" src="images/homePagePicture2_Small.jpg" />
								</div>
								<div data-p="112.50" style="display: none;">
									<img data-u="image" src="images/homePagePicture3_Small.jpg" />
								</div>
								<div data-p="112.50" style="display: none;">
									<img data-u="image" src="images/homePagePicture4_Small.jpg" />
								</div>
								<div data-p="112.50" style="display: none;">
									<img data-u="image" src="images/homePagePicture5_Small.jpg" />
								</div>
								<div data-p="112.50" style="display: none;">
									<img data-u="image" src="images/homePagePicture6_Small.jpg" />
								</div>
								<a data-u="add" href="http://www.jssor.com/demos/simple-fade-slideshow.slider" style="display:none">Simple Fade Slideshow</a>

							</div>
							<!-- Bullet Navigator -->
							<div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
								<!-- bullet navigator item prototype -->
								<div data-u="prototype" style="width:16px;height:16px;"></div>
							</div>
							<!-- Arrow Navigator -->
							<span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
							<span data-u="arrowright" class="jssora12r" style="top:0px;right:60px;width:30px;height:46px;" data-autocenter="2"></span>
						</div>

						<!-- #endregion Jssor Slider End -->
						<!--------相片輪播部分結束--------->







					</header>
				</div>
				<div class="6u$ 12u$(medium)">
					<p>歷史悠久的大肚最遠可追溯至西元前3500~1500年的新石器時代的『營埔文化』
					，爾至17世紀由台灣的原住民巴布拉族與貓霧捒族、巴則海族、洪雅族、道卡斯族建立的
					大肚王國，直到鄭氏家族來台大肚王國正式滅亡。</p>
					<p>1887年，磺溪書院建成，是為大肚國小的前身。1950年後改為台中縣大肚鄉。
					2010年縣市合併由台中縣大肚鄉改制為臺中市大肚區。</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer -->
	<footer id="footer">
		<div class="container">
			<ul class="icons">
				<li>
					<a href="https://www.facebook.com/profile.php?id=100000428411565" class="icon fa-facebook" target="_blank"></a>
				</li>
				<li>
					<a href="https://twitter.com/lkg11011" class="icon fa-twitter" target="_blank"></a>
				</li>
				<li>
					<a href="https://www.instagram.com/lkg11011/" class="icon fa-instagram" target="_blank"></a>
				</li>
			</ul>
			<ul class="copyright">
				<li>&copy; Dadu</li>
				<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
			</ul>
		</div>
	</footer>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/scroll/jquery.easing.1.3.js"></script>
	<script>
       $(function() {
           $('a[href=#start]').click(function() {
               $('html,body').animate({
                 scrollTop:$('#start').offset().top
               }, 2000, 'easeInOutCubic');
               return false;
           });
       });
	</script>

</body>

</html>