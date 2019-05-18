<?php
$host = "localhost";
$user = "root";
$password = "";
$datbase = "webtech";
$conn = mysqli_connect($host,$user,$password);
mysqli_select_db($conn,$datbase);
mysqli_close($conn);
?>
