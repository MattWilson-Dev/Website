<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'your_password';
$dbname = 'warehouse';
$email = $_POST['email'];
$password = $_POST['password'];

//Database connection
$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}
	
// Log in submission
if ( !isset($_POST['email'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the email and password field!');
}
// Prepare and Bind
if($stmt = $conn->prepare('SELECT id, password FROM customerdirectory WHERE email = ?')) {
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	$stmt->store_result();
}
if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	if ($_POST['password'] === $password) {
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_start();
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['id'] = $id;
		header("Location:welcome.php");
		} else {
		echo 'Incorrect password!';
	}
} else {
	echo 'Incorrect username!';
}
$stmt->close();
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Log In Form</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="main.css" />
	</head>
	<body>
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
												<li><a href="sign-up.html">Sign Up</a></li>
												<li class="current_page_item"><a href="log-in.html">Log In</a></li>
											</ul>
										</nav>

								</div>
							</header>
                  
                  
    <!-- Form -->   
                  <div id="signup">
		<form action="http://localhost/log-in.php" method="post">
            <h2 style="color:white; margin: 1em 0 1em 0;">Enter your email and password below</h2>
              <hr>       
     <label for="email">Email</label>
  <input placeholder="Enter Valid Email Address" id="user_first_name" type="email" name="email" required />   
            
  <label>Password</label>
  <input placeholder="Enter Password" type="password" name="password" required />

    <p style="margin: 0 0 1em 0;">By logging in you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn"><a href="index.html">Cancel</a></button>
      <button type="submit" class="signupbtn">Log In</button>
    </div> 
 
      <p style="margin: 1em 0 0 0;" class="psw"><a href="#">Forgot password?</a></p>
  </div>
</form>
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
										<h2>Site Map</h2>
										<ul class="divided">
											<li><a href="#">Home</a></li>
											<li><a href="#">Store</a></li>
											<li><a href="#">About Us</a></li>
											<li><a href="#">Events</a></li>
											<li><a href="#">Account</a></li>
										</ul>
									</section>

							</div>
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

