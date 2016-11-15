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
		<title>Travel Advice</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
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
						<h2>Travel Advice</h2>
						<p>替大家安排一趟一日遊幫大家節省排定行程的時間</p>
					</header>
				    <!---------------用地圖說故事 － StoryMapJS ---------------->
				    <iframe src="https://uploads.knightlab.com/storymapjs/ceb163472dfb4201ebdd2105aaa1346f/traveldadu/index.html" 
                    frameborder="0" width="80%" height="800"></iframe>
				</div>
			</section>

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
						<li>Reference: <a href="http://blog.infographics.tw/2015/05/tell-story-with-storymapjs/">Data Visualization</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>