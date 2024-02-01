<?php
session_start();


$db_con=mysqli_connect("localhost","root","sumaya","task1");

if (!isset($_SESSION['username'])) {
    header("Location: logintask.html");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pnr_number = $_POST["pnr_number"];


    echo "<h2>Cancellation Confirmed</h2>";
    echo "PNR Number: " . $pnr_number . "<br>";
    echo "Your reservation has been canceled successfully.";
}

// Close the database connection
mysqli_close($db_con);
?>
