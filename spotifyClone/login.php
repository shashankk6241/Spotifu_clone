<?php
session_start();
include("dbconnect.php");
?>
<?php
$un = $_POST['t1'];
$pd = $_POST['t2'];
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
