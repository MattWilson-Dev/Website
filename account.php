<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: log-in.html');
	exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>AlphaOmegaDist.com.au</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="main.css" />
    
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div class="container">

						<!-- Header -->
							<header id="header">
								<div class="inner">

									<!-- Logo -->
										<h1><a href="index.html" id="logo">α & Ω</a></h1>

								<!-- Nav -->
										<nav id="nav">
											<ul>
												<li><a href="index.html">Home</a></li>
												<li>
													<a href="#">Store</a>
													<ul>
														<li><a href="#">Games</a>
															<ul>
																<li><a href="#">Board Games</a></li>
																<li><a href="#">Dice</a></li>
																<li><a href="#">Books</a></li>
																<li><a href="#">Accessories</a></li>
														</ul>
															</li>
														<li><a href="#">Collectables</a>
															<ul>
																<li><a href="#">Statues</a></li>
																<li><a href="#">Figurines</a></li>
																<li><a href="#">Pop Vinyl's</a></li>
																<li><a href="#">Mugs</a></li>
														</ul>
														<li>
															<a href="#">Apparel</a>
															<ul>
																<li><a href="#">Clothing</a></li>
																<li><a href="#">Winter Wear</a></li>
																<li><a href="#">Accessories</a></li>
																<li><a href="#">Swag</a></li>
															</ul>
														</li>
														<li><a href="#">Misc Accessories</a></li>
													</ul>
												</li>
												<li><a href="about-us.html">About Us</a></li>
												<li><a href="sign-up.html">Cart</a></li>
												<li>
													<li class="current_page_item"><a href="#">My Account</a>
													<ul>
																<li><a href="#">Account Settings</a></li>
																<li><a href="#">My Orders</a></li>
																<li><a href="#">My Invoices</a></li>
																<li><a href="#">Sign Out</a></li>
														</ul>
											</ul>
										</nav>
                </div>
                </div>
          </div>
                    	<!-- Main Wrapper -->
				<div id="main-wrapper">
					<div class="wrapper style2">
						<div class="inner">
							<div class="container">
								<div id="content">

									<!-- Content -->

										<article>
											<header class="major">
												<h2>Welcome!</h2>
												<p><?=$_SESSION['email']?>!</p>
											</header>									

											<p>Insert Text</p>

											<h3>More intriguing information</h3>
											<p>Insert Text</p>
											
										</article>

								</div>
							</div>
						</div>
					</div>
					<div class="wrapper style3">
						<div class="inner">
							<div class="container">
								<div class="row">
									<div class="col-8 col-12-medium">

										<!-- Article list -->
											<section class="box article-list">
												<h2 class="icon fa-file-alt">Your Recent Purchases</h2>

												<!-- Excerpt -->
													<article class="box excerpt">
														<a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
														<div>
															<header>
																<span class="date">July 24</span>
																<h3><a href="#">Monopoly</a></h3>
															</header>
															<p>Insert Text</p>
														</div>
													</article>

												<!-- Excerpt -->
													<article class="box excerpt">
														<a href="#" class="image left"><img src="images/pic05.jpg" alt="" /></a>
														<div>
															<header>
																<span class="date">July 18</span>
																<h3><a href="#">Secret Hitler</a></h3>
															</header>
															<p>Insert Text</p>
														</div>
													</article>

												<!-- Excerpt -->
													<article class="box excerpt">
														<a href="#" class="image left"><img src="images/pic06.jpg" alt="" /></a>
														<div>
															<header>
																<span class="date">July 14</span>
																<h3><a href="#">Exploding Kittens</a></h3>
															</header>
															<p>Insert Text</p>
														</div>
													</article>

											</section>
									</div>
									<div class="col-4 col-12-medium">

										<!-- Spotlight -->
											<section class="box spotlight">
												<h2 class="icon fa-file-alt">Invoices Paid</h2>
												<article>
													<a href="#" class="image featured"><img src="images/pic07.jpg" alt=""></a>
													<header>
														<h3><a href="#">#10201923</a></h3>
														</header>
																																		
												</article>
											</section>
                    <section class="box spotlight">
												<h2 class="icon fa-file-alt">Invoices Owing</h2>
												<article>
													<a href="#" class="image featured"><img src="images/pic07.jpg" alt=""></a>
													<header>
														<h3><a href="#">#66998874</a></h3>
														</header>
																																		
												</article>
											</section>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			<!-- Footer Wrapper -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section>
										<h2>More Filler</h2>
										<ul class="divided">
											<li><a href="#">Stuff</a></li>
											
										</ul>
									</section>

								<!-- Links -->
									<section>
										<h2>Even More Filler</h2>
										<ul class="divided">
											<li><a href="#">Stuff</a></li>
											
										</ul>
									</section>

							</div>
							<div class="col-6 col-12-medium imp-medium">

								<!-- About -->
									<section>
										<h2><strong>Matty's shameless plug</strong> Terms and Conditions</h2>
										<p>Stuff <strong>important</strong>, stay a while and listen
										</p>
										<a href="#" class="button alt icon solid fa-arrow-circle-right">Learn More</a>
									</section>

								<!-- Contact -->
									<section>
										<h2>Get in touch</h2>
										<div>
											<div class="row">
												<div class="col-6 col-12-small">
													<dl class="contact">
														<dt>Twitter</dt>
														<dd><a href="#">@leetloot</a></dd>
														<dt>Facebook</dt>
														<dd><a href="#">facebook.com/leetloot</a></dd>
														<dt>WWW</dt>
														<dd><a href="#">leetloot.com</a></dd>
														<dt>Email</dt>
														<dd><a href="#">leetloot@gmail.com</a></dd>
													</dl>
												</div>
												<div class="col-6 col-12-small">
													<dl class="contact">
														<dt>Address</dt>
														<dd>
															1234 Fictional Rd<br />
															Coomera 4209 QLD<br />
															AUS || ABN:
														</dd>
														<dt>Phone</dt>
														<dd>(07) 3412 3412</dd>
													</dl>
												</div>
											</div>
										</div>
									</section>

							</div>
							<div class="col-12">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="stuff">Matt Wilson</a></li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

		</div>

						<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

					
				
	</body>
</html>
