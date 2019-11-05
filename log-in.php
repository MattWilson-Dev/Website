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



