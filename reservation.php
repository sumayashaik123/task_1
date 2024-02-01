<?php
$db_con=mysqli_connect("localhost","root","sumaya","task1");
if($db_con==false)
{
echo "DB connection failed";
}
else
{
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $fullname = $_POST["fullname"];
    $train_number = $_POST["train_number"];
    $class_type = $_POST["class_type"];
    $date_of_journey = $_POST["date_of_journey"];
    $from_place = $_POST["from_place"];
    $to_destination = $_POST["to_destination"];

    $q_insert = "INSERT INTO reservation_table (fullname, train_number, class_type, date_of_journey, from_place, to_destination) VALUES ('$fullname', '$train_number', '$class_type', '$date_of_journey', '$from_place', '$to_destination')";

    if (mysqli_query($db_con, $q_insert)) {
        echo "Reservation inserted successfully";
    } else {
        echo "Reservation insertion failed: " . mysqli_error($db_con);
    }
}
}
mysqli_close($db_con);
?>
