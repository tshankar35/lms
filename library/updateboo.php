<?php
$host="localhost";
$userid="root";
$pass="";
$db="library";
$con=mysqli_connect($host, $userid, $pass, $db);
mysqli_query($con, "UPDATE `bookrecord` set `bname`='". $_POST['bName']. "' where bid='".$_POST['bid']."'");

header("location:bookview.php");
?>