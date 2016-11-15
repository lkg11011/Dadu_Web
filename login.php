<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Login</title>
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
						<h2>管理者登入</h2>
						<p>這是管理者登入的地方，一般使用者無法使用，</p>
					</header>


					<!-- Form -->
						<?php 
							if(!isset($_SESSION['level'])) {
						?>
						<section>
							<form method="post" action="login/loginc.php">
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="account_Number" id="account_Number" pattern="\w+" value="" placeholder="請輸入帳號" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="password" name="password" id="password" pattern="\w+" value="" placeholder="請輸入密碼" />
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="登入" id="btnSend" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>
						<?php
							} else {
						?>
						<section>
							<h2>您好，管理者</h2>
						</section>
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

	</body>
</html>