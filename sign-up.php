<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'your_password';
$dbname = 'warehouse';
$company = $_POST['company_name'];
$contact = $_POST['contact_name'];
$country = $_POST['country'];
$abnacn = $_POST['abn_acn'];
$number = $_POST['contact_number'];
$email = $_POST['email'];
$password = $_POST['password'];

// Field Check
if (!isset($_POST['company_name'], $_POST['password'], $_POST['email'])) {
	// Could not get the data that should have been sent.
	die ('Please complete the registration form!');
}
// Field Check 2
if (empty($_POST['company_name']) || empty($_POST['password']) || empty($_POST['email'])) {
	// One or more values are empty.
	die ('Please complete the registration form');
}

// Include config file
require_once "config.php";

// Already Exists?
if ($stmt = $conn->prepare('SELECT id, password FROM customerdirectory WHERE email = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'An account with that email already exists, please choose another!';
	} 
} else {	
//New Account
    if($stmt = $conn->prepare("INSERT INTO customerdirectory(company_name, contact_name, country, abn_acn, contact_number, email, password)VALUES(?, ?, ?, ?, ?, ?, ?)"));{
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $stmt->bind_param("sssssss", $_POST['company_name'], $_POST['contact_name'], $_POST['country'], $_POST['abn_acn'], $_POST['contact_number'], $_POST['email'], $_POST['password']);
    $stmt->execute();
	}
	echo "You have successfully created your account! Please check the registered email to verify your account."; 
}

    $stmt->close();
    $conn->close();
?>

<!DOCTYPE HTML>

<html>

<head>
  <title>Sign Up Form</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="assets/css/main.css" />
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
                <li class="current_page_item"><a href="sign-up.html">Sign Up</a></li>
                <li><a href="log-in.html">Log In</a></li>
            </ul>
          </nav>

        </div>
      </header>

      <!-- Form -->
      <div id="signupform">
        <form action="http://localhost/sign-up.php" method="post">

          <h2 style="color:white; margin: 1em 0 1em 0;">Please fill in this form to create an account.</h2>
          <hr>

          <label for="company_name">Company Name</label>
          <input type="text" placeholder="Company & Co." name="company_name" required>

          <label for="psw-repeat">Contact Name</label>
          <input type="text" placeholder="John Smith" name="contact_name" required>

          <label>Country of Business Operation</label>
          <input type="text" placeholder="No Mans Land" name="country" required>

          <label style="margin: 0 0 0 0;" for="psw-repeat">ABN or ACN</label>
          <p>Applications can only be submitted with a valid ABN or ACN</p>
          <input type="text" placeholder="Must be a valid ABN or ACN" name="abn_acn" required>

          <label for="psw-repeat">Contact Number</label>
          <input type="text" placeholder="Pretend City" name="contact_number" required>
          <hr>

          <label for="email">Email</label>
          <input placeholder="Enter Valid Email Address" id="user_first_name" size="40" type="email" name="email" />

          <label for="psw-repeat">Password</label>
          <input placeholder="Enter Password" type="password" name="password" />

          <label for="psw-repeat">Repeat Password</label>
          <input type="password" placeholder="Repeat Password" name="psw-repeat" required></input>

          <p>"By creating an account you agree to our <a href="# " style="color:dodgerblue">Terms & Privacy</a>.</p>

          <div class="clearfix ">
            <button type="button" class="cancelbtn"><a href="index.html">Cancel</a></button>
            <button type="submit" class="signupbtn">Sign Up</button>
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
                      1234 Fictional Rd<br /> Coomera 4209 QLD<br /> AUS || ABN:
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
              <li>&copy; Untitled. All rights reserved</li>
              <li>Design: <a href="stuff">Matt Wilson</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
  </div>

  <!-- Scripts -->
  <script src="assets/js/jquery.min.js "></script>
  <script src="assets/js/jquery.dropotron.min.js "></script>
  <script src="assets/js/browser.min.js "></script>
  <script src="assets/js/breakpoints.min.js "></script>
  <script src="assets/js/util.js "></script>
  <script src="assets/js/main.js "></script>

</body>

</html>
