<?php
session_start();
$db_con=mysqli_connect("localhost","root","sumaya","task1");
if($db_con==false)
{
echo"DB connection failed";
}

else
{
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate user credentials
    $sql = "SELECT * FROM login_table WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($db_con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        // Login successful
        $_SESSION['username'] = $username;
        header("Location: main_system.php");
        exit();
       
    } else {
       
        echo "Invalid username or password.";
    }
}
}

mysqli_close($db_con);
?>
