<!DOCTYPE HTML>

<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo base_url('public/css/main.css'); ?>"/>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="account.php">Account</a></li>
							<li><a href="Wallet.php">Wallet</a></li>
							<li><a href="livechat.php">Live Chat</a></li>
							<li><a href="downline.php">Downline</a></li>
							<li><a href="profile.php">Profile Info</a></li>
						</ul>
					</nav>
				</header>
			<!-- Main -->
				<section id="main" class="container medium">
					<header>
						<h2>Log In</h2>
					</header>
					<div class="box" style="width: 500px;margin:auto;">
						<form method="post" action="<?php echo base_url('Home/logged'); ?>">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-12">
									<input type="email" name="email" id="email" value="" placeholder="Enter Full Name " required />
								</div><br />	
								
								
								<div class="col-12">
									<input type="Password" name="pass" id="pass" value="" placeholder="Enter Password" required />
								</div><br />
								<div class=" col-12">
									<br>
									
      								<input type="checkbox" checked="checked" name="remember" id="ab">
   									
									<label for="ab">Remember me</label>
											</div>
										
								<div class="col-12">
									<br>
									<ul class="actions special">
										<li><input type="submit" value="Login" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						
					</ul>
					<ul class="copyright">
						
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="<?php echo base_url(); ?>/js/jquery.min.js"></script>
			<script src="<?php echo base_url(); ?>/js/jquery.dropotron.min.js"></script>
			<script src="<?php echo base_url(); ?>/js/jquery.scrollex.min.js"></script>
			<script src="<?php echo base_url(); ?>/js/browser.min.js"></script>
			<script src="<?php echo base_url(); ?>/js/breakpoints.min.js"></script>
			<script src="<?php echo base_url(); ?>/js/util.js"></script>
			<script src="<?php echo base_url(); ?>/js/main.js"></script>

	</body>
</html>