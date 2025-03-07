<?php
$servername = "localhost"; // Change if your database server is different
$username = "your_username"; // Change to your database username
$password = "your_password"; // Change to your database password
$dbname = "pet_care_portal"; // Change if you used a different database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
