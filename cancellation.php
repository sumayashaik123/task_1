<?php
session_start();


$db_con=mysqli_connect("localhost","root","sumaya","task1");
if (!isset($_SESSION['username'])) {
    header("Location: logintask.html"); // Redirect to the login page if not logged in
 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $pnr_number = $_POST["pnr_number"];

    $q_select_reservation = "SELECT * FROM reservation_table WHERE pnr_number = '$pnr_number'";
    $result = mysqli_query($db_con, $q_select_reservation);

    if ($result && mysqli_num_rows($result) > 0) {
        // Display reservation information
        $row = mysqli_fetch_assoc($result);

        echo "<h2>Reservation Information</h2>";
        echo "PNR Number: " . $row['pnr_number'] . "<br>";
        echo "Full Name: " . $row['fullname'] . "<br>";
      

       
        echo '<form action="confirm_cancellation.php" method="POST">';
        echo '<input type="hidden" name="pnr_number" value="' . $row['pnr_number'] . '">';
        echo '<button type="submit">OK</button>';
        echo '</form>';
    } else {
        echo "No reservation found with the provided PNR number.";
    }
}


mysqli_close($db_con);
?>
