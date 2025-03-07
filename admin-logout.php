<?php

// Establish a database connection
$db_host = 'localhost3306';
$db_user = 'root';
$db_pass = '';
$db_name = 'mydbml';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get username and password from form
$username = $_POST['username'];
$password = $_POST['password'];

// Query to check if user exists in the database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    // User exists, redirect to a logged-in page
    header("Location: pet.html");
    exit();
} else {
    // User doesn't exist or credentials are incorrect, redirect back to login page
       exit();
}

mysqli_close($conn);
?>
