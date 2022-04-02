<?php
$host="localhost";
$userid="root";
$pass="";
$db="library";
$con=mysqli_connect($host, $userid, $pass, $db);
mysqli_query($con, "UPDATE student set userid='" . $_POST['id'] . "',bid='" . $_POST['bid'] 
. "',issue='" . $_POST['issuedate'] . "',returnby='" . $_POST['returndate'] . "',name='".$_POST['txtName']."' WHERE userid='". $_POST['id']."'");

header("location:studentview.php");
?>