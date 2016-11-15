<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact Us</title>
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
						<h2>Contact Us</h2>
						<p>有任何問題都可以透過此留言版留言給我們，或者藉由點擊下方的FB也可以</p>
					</header>


					<!-- Form -->
						<?php 
							if(!isset($_SESSION['level'])) {
						?>
						<section>
							<h3>聯絡我們</h3>
							<form method="post" action="phpMailer.php">
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Name" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="email" name="email" id="email" value="" placeholder="Email" />
									</div>
									<div class="12u$">
										<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Send Message" id="btnSend" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>
						<!-------若管理者登入後在此頁將會看到從資料庫取出來的訪客留言所有資料------->
						<?php
							} else {
								require_once("config.php");
								
								$dsn = DB_TYPE .":host=".DB_HOSTNAME .";dbname=". DB_NAME . ";charset=". DB_CHARSET;
								
								try{
									$db = new PDO($dsn,DB_USERNAME,DB_PASSWORD);
								}catch (PDOException $e) {
									echo $e->getCode();
								}
								$result = $db->query("select * from dadumessage");
						?>
						<section>
							<h4>訪客留言版</h4>
								<div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th>Name</th>
												<th>Message</th>
												<th>Time</th>
											</tr>
										</thead>
										<tbody>
										<?php
											while ($row = $result->fetch())
											{
											echo "<tr>";
											echo "<td>";
										    echo "Name：{$row['Name']}";
										    echo "</td>";
										    echo "<td>";
										    echo "Message: {$row['Message']}";
										    echo "</td>";
										    echo "<td>";
										    echo "Time：{$row['Date']}";
										    echo "</td>";
										    echo "</tr>";
										?>
											<?php
											}
												$db = null;
											?>
										</tbody>
									</table>
								</div>
						</section>
							<!------------TOP圖片紐-------------->
						<div id="abgne_float_ad" >
							<a href="#" id="goTop"><img src="images/topArrow.png"/></a>
						</div>
						
						<?php
							}
						?>

					

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