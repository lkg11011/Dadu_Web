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
		<title>Dadu Attraction</title>
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
						<h2>ATTRACTION</h2>
						<p>來到這裡你可以騎著腳踏車悠遊在田間欣賞著風景及悠久的古蹟</p>
					</header>
						<section>
							<h2>追分火車站</h2>
							<div class="box alt">
								<div class="row 50% uniform">
									<div class="4u"><span class="image fit"><img src="images/attraction/train.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/attraction/train1.jpg" alt="" /></span></div>
									<div class="4u$"><span class="image fit"><img src="images/attraction/train2.jpg" alt="" /></span></div>
								</div>
							</div>
						</section>
						<section>
							<header>
								<p>地址:台中市大肚區王田里追分街13號</p>
							</header>
							<p>追分車站位於臺灣臺中市大肚區，為臺灣鐵路管理局海岸線、成追線的鐵路車站。「追分」（おいわけ）為日文漢字，
							為「分岐路」之意，因早期縱貫線行至追分這裡之後路線開始分歧，其中一邊繼續沿海岸線通往彰化，另一邊則經成追線通往山線之成功車站
							，形成三角線而得名，而在日本也有多個因為相同緣故而命名為「追分」的車站存在。除了站名的淵源之外，本站也因販售「追分－成功」紀念車票而聞名。<br>
							追分火車站位於台中市的大肚區，建於日治時期西元1922年，火車站站房的結構主要以檜木木材搭建而成，至今已將近90年的歷史，
                            其中有幾次整修維護，由於建構極為紮實，且多處尚保有完善的原木色澤，因此至今在台灣是受完善保存的復古車站。
							</p>
						</section>
						<section>
							<h2>磺溪書院</h2>
							<div class="box alt">
								<div class="row 50% uniform">
									<div class="4u"><span class="image fit"><img src="images/attraction/college.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/attraction/college1.jpg" alt="" /></span></div>
									<div class="4u$"><span class="image fit"><img src="images/attraction/college2.jpg" alt="" /></span></div>
								</div>
							</div>
						</section>
						<section>
							<header>
								<p>地址:台中市大肚區文昌路60號</p>
							</header>
							<p>磺溪書院（俗稱文昌祠）位於臺灣臺中市大肚區磺溪里文昌路上的古蹟。書院的前身稱為「西雝社」亦稱為「文昌會」，是當代文人士子的結集之所。
							西雝社創建於清嘉慶四年（1799年），後來在光緒十三年（1887年）再擴建成為「磺溪書院」。在民國七十五年（1986年），經中華民國內政部列為第三級古蹟。　
							<br>磺溪書院建造於清朝光緒十三年，是由看得出來歷史痕跡的磚瓦、青石、泉州石和古老福杉等組成。原本擁有拜殿、大殿、
							門廳和正殿等建築物的磺溪書院因為台灣光復後不斷被變賣和偷竊，許多古蹟建築都已經失去下落，現在所看到的磺溪書院是西元1986年由內政部撥款修復規劃成的。
                            儘管磺溪書院已經是重建過後的古蹟，但是磺溪書院的各個角落都看得出來他的悠久歷史，散發著古色古香的氛圍。
							</p>
						</section>
						<section>
							<h2>大肚山萬里長城步道</h2>
							<div class="box alt">
								<div class="row 50% uniform">
									<div class="4u"><span class="image fit"><img src="images/attraction/hikingHail.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/attraction/hikingHail1.jpg" alt="" /></span></div>
									<div class="4u$"><span class="image fit"><img src="images/attraction/hikingHail2.jpg" alt="" /></span></div>
								</div>
							</div>
						</section>
						<section>
							<header>
								<p>地址:台中市大肚區沙田路二段310巷</p>
							</header>
							<p>位於大肚山的萬里長城步道其實也頗負盛名，郊山等級的步道，蜿蜒於大肚山的稜支線，因為海拔不高且坡度平緩，是一條老少咸宜的步道，
							加上離鬧區並不算太遠，離高速公路或快速道路也近，尤其大肚區側的入口也方便停車，是條適合闔家前來走走路運動一下的好地方。<br>
							高中以前我們家也會全家人每個禮拜都到這邊爬山運動一下，路上有很多樹蔭所以也不會很熱，不過畢竟是運動多少還是會留些汗，平日都是些本地的伯伯婆婆
							較多，假日的話就常看見全家出來運動的情形，但是人也不會很多，比起去大坑人擠人，個人倒還比較喜歡在鄰近的步道爬山，不只近還省油錢啊!
							</p>
						</section>
						<section>
							<h2>望高寮風景區</h2>
							<div class="box alt">
								<div class="row 50% uniform">
									<div class="4u"><span class="image fit"><img src="images/attraction/mountain.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/attraction/mountain5.jpg" alt="" /></span></div>
									<div class="4u$"><span class="image fit"><img src="images/attraction/blueRoad.jpg" alt="" /></span></div>
								</div>
							</div>
						</section>
						<section>
							<header>
								<p>地址: 台中市遊園路二段</p>
							</header>
							<p>望高寮是臺灣觀賞夜景的地點之一，位於臺中市南屯區與大肚區交界，居大肚山南側，倚臨王田斷崖，為地形上可俯瞰東、南、西三面的景觀；
							向東可展望臺中盆地上臺中市天際線，向南可眺望大肚溪及對岸的彰化平原，向西可遠望整個臺中港。由於望高寮的位置偏僻，
							又因這裡是觀賞夜景的至高點，吸引不少人前來。<br>
							在幾年前，這裡本來只有一個平台而已，後來在旁邊蓋了一座望高寮夜景公園，所以每到晚上這裡便是滿滿的人潮，半夜人潮也絲毫不減，
							不過治安方面倒是不用擔心，不到幾公尺處就有一個警察分駐所，比起以前真的是好很多。<br>
							離望高寮不遠處有一條剛開沒幾年的華南路，由於晚上夜燈會亮起藍色的燈光，所以又別稱『藍色公路』。
							</p>
						</section>
						<section>
							<h2>大肚溪口野生動物保護區</h2>
							<div class="box alt">
								<div class="row 50% uniform">
									<div class="4u"><span class="image fit"><img src="images/attraction/daduRiverSide.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/attraction/daduRiverSide4.jpg" alt="" /></span></div>
									<div class="4u$"><span class="image fit"><img src="images/attraction/daduRiverSide2.jpg" alt="" /></span></div>
								</div>
							</div>
						</section>
						<section>
							<header>
								<p>地址: 台中市龍井區火力發電廠旁</p>
							</header>
							<p>大肚溪口野生動物保護區位於臺灣臺中市與彰化縣交界的大肚溪出海口，此地是臺灣中部地區最大的水鳥棲息地
							。1995年，由臺中縣與彰化縣政府依《野生動物保育法》公告為「大肚溪口水鳥保護區」，再於1998年修正公告為「大肚溪口野生動物保護區」
							。範圍北起台中發電廠邊界，南至彰化伸港的田尾排水溝。
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