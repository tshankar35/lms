<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="library";
$con=mysqli_connect($host,$user,$pass,$db);
$user=$_POST['user'];
$pass=$_POST['pass'];
$sql=mysqli_query($con,"select * from student
where userid='$user' and pas='$pass'");
$row=mysqli_num_rows($sql);
if($row>0)
{
	$_SESSION['user']=$user;
	
	if($user=='admin')
	{
	header("location:dashboard.php");
	}
	else
	{
		header("location:user.php");
	}
}
else
{
	header("location:errorlogin.php");
}

?>