<?php
	session_start();
?>
<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
	<title>Photo</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link href="assets/css/photocss/bootstrap.css" rel="stylesheet">
	<link href="assets/css/photocss/bootstrap-responsive.css" rel="stylesheet">
	<link href="assets/css/photocss/docs.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/scrollTop.css">
	<!--[if lt IE 9]>
		<script src="http://fineui.com/lib/html5shim/html5.js"></script>
	<![endif]-->

	<link href="assets/css/photocss/lightbox.css" rel="stylesheet">

	<!--------瀑布式相片顯示及燈箱效果CSS------------->
	<style>
		#masonry {
			padding: 0;
			min-height: 450px;
			margin: 50px auto;
		}
		
		#masonry .thumbnail {
			width: 330px;
			margin: 20px;
			padding: 0;
			border-width: 1px;
			-webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
			box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
		}
		
		#masonry .thumbnail .imgs {
			padding: 10px;
		}
		
		#masonry .thumbnail .imgs img {
			margin-bottom: 5px;
		}
		
		#masonry .thumbnail .caption {
			background-color: #fff;
			padding-top: 0;
			font-size: 13px;
		}
		
		#masonry .thumbnail .caption .title {
			font-size: 13px;
			font-weight: bold;
			margin: 5px 0;
			text-align: left;
		}
		
		#masonry .thumbnail .caption .author {
			font-size: 11px;
			text-align: right;
		}
		
		.lightbox .lb-image {
			max-width: none;
		}
		/*
		#masonry .thumbnail.style1
		{
			border-color: #d6e9c6;
		}
		#masonry .thumbnail.style1 .caption
		{
			color: #468847;
			background-color: #dff0d8;
			border-color: #d6e9c6;
		}
		#masonry .thumbnail.style1 .caption a
		{
			color: #468847;
			text-decoration: underline;
		}
		
		
		#masonry .thumbnail.style3
		{
			border-color: #428bca;
		}
		#masonry .thumbnail.style3 .caption
		{
			color: #fff;
			background-color: #428bca;
			border-color: #428bca;
		}
		#masonry .thumbnail.style3 .caption a
		{
			color: #fff;
			text-decoration: underline;
		}
		
		#masonry .thumbnail.style4
		{
			border-color: #bce8f1;
		}
		#masonry .thumbnail.style4 .caption
		{
			color: #3a87ad;
			background-color: #d9edf7;
			border-color: #bce8f1;
		}
		#masonry .thumbnail.style4 .caption a
		{
			color: #3a87ad;
			text-decoration: underline;
		}
		*/
	</style>
	<!--------瀑布式相片顯示及燈箱效果CSS結束------------->
</head>

<body>

	<!-- Header -->
	<header id="header">
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

	<!-- Main -->
	<section id="main" class="wrapper">
		<div class="container">
			<header class="major special">
						<h2>Photo</h2>
						<p>各個景點的照片統一整理在此，點即可放大</p>
					</header>
			<div id="masonry" class="container-fluid">
			</div>
	
	
			<div id="masonry_ghost" class="hide">
				<!--------瀑布式相片顯示及燈箱效果照片部分------------->
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="mountain9.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>早晨的望高寮</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="mountain3.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>望高寮日出</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="mountain2.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>大肚山夕彩1</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="mountain1.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>大肚山夕彩2</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="mountain.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>晨燒望高寮</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="mountain6.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>望高寮夜景公園1</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="mountain8.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>望高寮夜景公園2</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="mountain4.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>大肚山日落</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="mountain5.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>望高寮俯瞰台中市區1</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="mountain7.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>望高寮俯瞰台中市區2</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="forest.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>國小旁美麗的落羽松</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="college.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>磺溪書院</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="college4.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>磺溪書院中堂</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="college3.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>磺溪書院考生祈福活動</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="train.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>追分火車站正面</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="train1.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>追分火車站月台往車站拍攝1</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="train2.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>追分火車站月台往車站拍攝2</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="train3.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>追分火車站月台往車站拍攝3</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="train4.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>追分火車站許願池</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="train5.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>追分火車站內部</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="daduRiverSide5.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>大肚溪口1</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
							<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="daduRiverSide.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>大肚溪口2</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
							<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="daduRiverSide1.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>大肚溪口3</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
							<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="daduRiverSide3.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>大肚溪口4</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
							<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="daduRiverSide2.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>大肚溪口夕陽</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
							<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="daduRiverSide4.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>大肚溪口夕陽</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="blueRoad.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>藍色公1路</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="blueRoad1.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>藍色公路2</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="hikingHail1.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>萬里長城登山步道入口</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="hikingHail.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>萬里長城登山步道1</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="hikingHail3.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>萬里長城登山步道2</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<div class="thumbnail">
					<div class="imgs">
						<input type="hidden" value="hikingHail4.jpg">
					</div>
					<div class="caption">
						<div class="title"><h4>萬里長城登山步道高點俯瞰</h4></div>
						<div class="content">
	
						</div>
						<div class="author">
							
						</div>
					</div>
				</div>
				<!--------瀑布式相片顯示及燈箱效果照片部分結束------------->
	
	
			</div>
	
	
		</div>
	</section>
	<!------------TOP圖片紐-------------->
	<div id="abgne_float_ad" >
		<a href="#" id="goTop"><img src="images/topArrow.png"/></a>
	</div>


	<!-- Footer -->
	<footer id="footer">
		<div class="container">
			<ul class="icons">
				<li><a href="https://www.facebook.com/profile.php?id=100000428411565" class="icon fa-facebook" target="_blank"></a></li>
				<li><a href="https://twitter.com/lkg11011" class="icon fa-twitter" target="_blank"></a></li>
				<li><a href="https://www.instagram.com/lkg11011/" class="icon fa-instagram" target="_blank"></a></li>
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
	<script src="assets/js/scroll/scrollTop.js"></script>
	<!-- Photo Script-->
	<script src="assets/js/photojs/bootstrap.min.js"></script>
	<script src="assets/js/photojs/main.js"></script>

	<script src="assets/js/photojs/masonry.pkgd.min.js"></script>
	<script src="assets/js/photojs/imagesloaded.pkgd.min.js"></script>
	<script src="assets/js/photojs/lightbox-2.6.min.js"></script>

</body>

</html>