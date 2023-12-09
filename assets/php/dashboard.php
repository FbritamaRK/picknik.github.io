<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("index.html");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <p>This is your dashboard.</p>
    <a href="logout.php">Logout</a>
</body>
</html>