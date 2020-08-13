<!DOCTYPE HTML>

<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo base_url('public/css/main.css'); ?>"/>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="index.html"></a> </h1>
					<nav id="nav" style="float: left;">
						<ul style="text-align: center;float: left;">
							<li><a href="index.html">Home</a></li>
							<li><a href="index.html">Account</a></li>
							<li><a href="index.html">Wallet</a></li>
							<li><a href="index.html">Live Chat</a></li>
							<li><a href="index.html">Downline</a></li>
							<li><a href="index.html">Profile Info</a></li>
							
							
							
						</ul>
					</nav>
				</header>

			<!-- Main -->

							<!-- Table -->
								<section class="box">
									<h3>Premium Plans</h3>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Levels</th>
                                                 
                                                 <?php   foreach($data as $row){ ?>  
													<th> <?php echo $row ?> </th>
                                                 <?php } ?>
                                                        
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>level 1</td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>level 2</td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>level 3</td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>level 4</td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>level 5</td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td></td>
													<td><a href="#" class="button alt small">Active Now</a></td>
													<td><a href="#" class="button alt small">Active Now</a></td>
													<td><a href="#" class="button alt small">Active Now</a></td>
												</tr>
												
												
											</tbody>
											
										</table>
									</div>

									
									<h3>Bonus</h3>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>200</th>
													<th>400</th>
													<th>600</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>level 2</td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>level 3</td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>level 4</td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>level 5</td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td></td>
													<td><a href="#" class="button alt small">Active Now</a></td>
													<td><a href="#" class="button alt small">Active Now</a></td>
													<td><a href="#" class="button alt small">Active Now</a></td>
												</tr>
												
												
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>

									
								</section>

						</div>
					</div>
			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						
					</ul>
					<ul class="copyright">
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>