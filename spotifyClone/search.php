<?php
session_start();
include("dbconnect.php");
?>
<?php
$song = $_POST['t1'];
$sql = "SELECT * FROM registration";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    if ($row["uname"] == $un && $row["pass"] == $pd) {
        $_SESSION["suser"] = $un;
        $_SESSION["spass"] = $pd;
        header("location:firstpage.html");
    }
}
mysqli_close($conn);
?>
