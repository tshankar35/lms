<?php
$host="localhost";
$user="root";
$pass="";
$db="library";
$con=mysqli_connect($host, $user, $pass, $db);
$userid=$_POST['userid'];
$pas=$_POST['pswd'];
$cnfpas=$_POST['cnfpswd'];
$name=$_POST['name'];
if($userid==='' || $pas==='' || $cnfpswd==='' || $name==='')
{
    header("location:error_register.php");
}
else
{
    if ($pas === $cnfpas)
{
    $sql = mysqli_query($con,"INSERT INTO `student`(`userid`, `bid`, `pas`, `issue`, `returnby`, `name`) VALUES ('$userid','','$pas','','','$name')");
    header("location:studentview.php");
}
else
{
    header("location:error_register.php");
}   
}
