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
												<li class="current_page_item"><a href="index.html">Home</a></li>
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
												<li><a href="sign-up.html">Sign Up</a></li>
												<li><a href="log-in.html">Log In</a></li>
											</ul>
										</nav>

								</div>
							</header>

						<!-- Banner -->
							<div id="banner">
                <h2><a style="font-family: 'Open Sans', sans-serif;" href="index.html" id="logo">Welcome back!</a>
                  <br>
				  <br>
				  <?=$_SESSION['email']?>!</h2>
                                     
							<a href="account.php" class="button large icon solid fa-check-circle">Account</a>
							</div>

					</div>
				</div>
			
		</div>
	</body>
</html>
