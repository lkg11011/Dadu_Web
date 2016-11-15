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
		<title>Dadu Food</title>
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
						<h2>FOOD</h2>
						<p>來到大肚幾樣當地人讚不絕口的美食，容我介紹給你們</p>
					</header>
						<section>
							<h2>大肚公有零售市場</h2>
							<div class="box alt">
								<div class="row 50% uniform">
									<div class="4u"><span class="image fit"><img src="images/food/food_Market.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/food/food_Market1.jpg" alt="" /></span></div>
									<div class="4u$"><span class="image fit"><img src="images/food/food_Market2.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/food/food_Market3.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/food/food_Market4.jpg" alt="" /></span></div>
									<div class="4u$"><span class="image fit"><img src="images/food/food_Market5.jpg" alt="" /></span></div>
								</div>
							</div>
						</section>
						<section>
							<header>
								<p>地址:台中市大肚區沙田路二段707號</p>
							</header>
							<p>記得小時候對這個市場的印象就是很髒亂，不過後來有整修之後變乾淨不少，雖然小時候覺得髒亂但還是常常來吃
							這邊的美食啊。現在規劃有分兩區一區是美食區，另一區為生鮮區，美食區有不少從小吃到大的美食啊，諸如「阿珍的舖」為專賣水煎包、
							蔥仔條的早點店，大肚燕肉羹的肉羹麵飯類都是超讚的!!蔥仔條的攤位是每天現場手工現製所以看的到老闆老闆娘在揉麵、灑蔥花、炸蔥仔條
							，滿滿的蔥香味撲鼻而來真是讓人受不了。<br>
							「大肚燕肉羹」是一個有30多年歷史的老店，麵條肉粳都是現做現賣，口感吃起來不會像一般麵攤的肉羹！肉粳麵的麵條選用油麵，不容易爛，
							湯頭喝得到豬肉的甜度、烏醋的香氣明顯，酸香中有著鮮甜。
							</p>
						</section>
						<section>
							<h2>錦倉燒炸粿</h2>
							<div class="box alt">
								<div class="row 50% uniform">
									<div class="4u"><span class="image fit"><img src="images/food/food_Lunch.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/food/food_Lunch1.jpg" alt="" /></span></div>
									<div class="4u$"><span class="image fit"><img src="images/food/food_Lunch2.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/food/food_Lunch3.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/food/food_Lunch4.jpg" alt="" /></span></div>
									<div class="4u$"><span class="image fit"><img src="images/food/food_Lunch5.jpg" alt="" /></span></div>
								</div>
							</div>
						</section>
						<section>
							<header>
								<p>地址:台中市大肚區文昌路一段十七號</p>
							</header>
							<p>這間則是我中餐或晚餐的選擇之一價格都是很平民的，印象中也沒記得他有漲過價。裡面空間不小，點餐劃單送櫃台之後等餐點來
							，結帳分兩邊，一邊是炸粿一邊是麵攤。而炸粿是下午三點才有開賣，賣到沒有才收攤，不過通常6點多就賣完了，買的人實在太多了...。
							</p>
						</section>
						<section>
							<h2>王田鵝肉</h2>
							<div class="box alt">
								<div class="row 50% uniform">
									<div class="4u"><span class="image fit"><img src="images/food/goose.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/food/goose1.jpg" alt="" /></span></div>
									<div class="4u$"><span class="image fit"><img src="images/food/goose2.jpg" alt="" /></span></div>
								</div>
							</div>
						</section>
						<section>
							<header>
								<p>地址:台中市大肚區沙田路一段260號(位在追分火車站對面)</p>
								<p>預約電話:04-2693-0510</p>
							</header>
							<p>個人不太喜歡鵝肉，但是這間鵝肉店人真的爆多，不管假日還是平日，一到吃飯時間旁邊總是一堆汽機車把機車道都給塞滿了，
							於是幫大家搜尋了一下其他人的感想。<br>
							王田鵝肉只要在營業時間內，店外總是停放著車子，有時甚至還會並排停車可說是名符其實的道路美食，由於店主人非常低調，
							所以在報章媒體上很少看到相關的報導，但在車友及司機大哥間的口耳相傳下名聲依舊是相當響亮。<br>
							鵝肉的肉質相當紮實，而且完全不會有難咬的感覺，搭配上在口中四溢的鵝肉肉汁果然是夠好吃，保留食材的原味
                            ，透過精準的調味，將鵝肉的美味發揮到一個極致。
							</p>
						</section>
						<section>
							<h2>品香肉包店</h2>
							<div class="box alt">
								<div class="row 50% uniform">
									<div class="4u"><span class="image fit"><img src="images/food/bun.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/food/bun1.jpg" alt="" /></span></div>
									<div class="4u$"><span class="image fit"><img src="images/food/bun2.jpg" alt="" /></span></div>
								</div>
							</div>
						</section>
						<section>
							<header>
								<p>地址:台中市大肚區沙田路一段813號</p>
							</header>
							<p>就在我家對面的品香手工包子店當然要推一下!基本上當地的人都知道這間店
							，不只有新鮮現做的可以買，還有做好的冷凍起來可以買回家當早餐
							，或者消夜吃用電鍋蒸一下也超好吃的。<br>
							不只只有賣鹹的肉包或筍包，甜的豆沙包、奶油包也是愛吃甜食的人的好選擇。如果來一趟大肚不知道要買甚麼當伴手禮
							品香肉包絕對是你的最佳伴手禮!
							</p>
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