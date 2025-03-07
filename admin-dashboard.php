<?php
session_start();

// Check if user is logged in, if not redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: admin-login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <a href="admin-logout.php">Logout</a>
    <h3>Manage Articles</h3>
    <!-- Display articles from database -->
</body>
</html>
