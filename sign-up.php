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
