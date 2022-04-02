<?php
$host="localhost";
$user="root";
$pass="";
$db="library";
$con=mysqli_connect($host, $user, $pass, $db);
$bid=$_POST['bid'];
$bname=$_POST['bname'];
if($bid==='' || $bname==='')
{
    header("location:error_addbook.php");
}
else
{


    $sql = mysqli_query($con,"INSERT INTO `bookrecord`(`bid`, `bname`) VALUES ('$bid','$bname')");
    header("location:success_addbook.php");
}
