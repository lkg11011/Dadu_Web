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
		<title>Dadu Accommodation</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/scrollTop.css">
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
						<h2>ACCOMMODATION</h2>
						<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
					</header>
							<h4>華倫汽車旅館</h4>
							<p><span class="image left"><img src="images/accommodation1.jpg" alt="" />
							</span><br><br><br><br>華倫汽車旅館位於台中市大肚區興和路111號，離王田交流道口很近，價格約1500起跳，屬於較為平價的旅館，
							附近皆為一般住家，當然也有便利商店之類的也不會說到不方便的地步，若不想選擇此處可以往彰化方向前往，
							這邊就會有比較多的選擇性。<br><br><br><br> 電話:04-2693-1882<br>
							<a href="http://www.zyh-motel.com.tw/hl/" target="_blank"  style="text-decoration:none">華倫汽車旅館</a></p>
							
							<p><span class="image right"><img src="images/accommodation2.jpg" alt="" /></span><br><br>
							<h4>清新溫泉</h4>
							如果錢包較為飽滿的旅客，可以選擇到大肚山上的清新溫泉旅館住上一晚，這裡的價格較為昂貴，基本上兩人房要5000元以上，
							一般飯店有的設備它都有，諸如健身房、游泳池，當然在房間還有溫泉可以泡，畢竟標榜中部地區唯一五星級的溫泉旅館。
							這邊離景點，望高寮非常近，走路不用10分鐘就到了，可以早起看個美麗的日出，或者欣賞完台中彰化的夜景，再來睡個好覺
							，都是非常不錯的選擇!<br><br>
							電話:04-2382-9888<br>
							<a href="http://www.freshfields.com.tw/" target="_blank"  style="text-decoration:none">清新溫泉</a></p>
						</section>

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

	</body>
</html>