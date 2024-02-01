<?php
$username = $_POST["username"];
$password = $_POST["password"];

$db_con = mysqli_connect("localhost", "root", "sumaya", "task1");

if ($db_con === false) {
    echo "DB connection failed: " . mysqli_connect_error();
} else {
    $q_insert = "INSERT INTO login_table (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($db_con, $q_insert)) {
        echo "Inserted successfully";
    } else {
        echo "Insertion failed: " . mysqli_error($db_con);
    }

    // Close the database connection
    mysqli_close($db_con);
}
?>
