<?php
$un = $_POST['t1'];
$pd = $_POST['t2'];
$em = $_POST['t3'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webd project";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO registration (uname, pass, email)
  VALUES ('$un','$pd','$em')";


if (mysqli_query($conn, $sql)) {
    header("location:login2.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
