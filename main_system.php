<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: logintask.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main System</title>
</head>
<body>
    <h2>Welcome to the main system</h2>
</body>
</html>

