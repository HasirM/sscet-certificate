<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION["authenticated"]) || !$_SESSION["authenticated"]) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body>
    <h2>Welcome to the landing page!</h2>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
