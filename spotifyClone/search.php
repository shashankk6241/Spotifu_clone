<?php
session_start();
include("dbconnect.php");
?>
<?php
$song = $_POST['t1'];
$sql = "SELECT * FROM tracks";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    if ($row["song"] == $song) {
        $_SESSION["song"] = $song;
        $_SESSION['artist'] = $row['artist'];
        $_SESSION['duration'] = $row['duratuin'];

        header("location:search2.php");
    }
}
?>
