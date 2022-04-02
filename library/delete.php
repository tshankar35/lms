<?php

$host="localhost";
$userid="root";
$pass="";
$db="library";
$con=mysqli_connect($host, $userid, $pass, $db);
$id=$_GET['id'];
$del = mysqli_query($con, "delete from student where userid='$id'");

if($del)
{
    mysqli_close($con);
    header("location:studentview.php");
    exit;
}
else
{
    header("location:error_delete.php");
}
?>