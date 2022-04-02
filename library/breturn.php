<?php
session_start();
if($_SESSION['user']=='')
{
	header("location:newlogin.php");
}
$user=$_SESSION['user'];
$host="localhost";
$userid="root";
$pass="";
$db="library";
$con=mysqli_connect($host, $userid, $pass, $db);
mysqli_query($con, "UPDATE student set bid='',issue='', returnby='' WHERE userid='$user'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Return Successful</title>
</head>
<style>

    .bg-light
    {
        --bs-bg-opacity:0.7;
    }
    body
    {
        background-image: url(screen.jpg);
        background-repeat: no-repeat;
         background-size: 100%;
         
    }
</style>

<body>
<div class="col-md-6" style="margin-left:25%; margin-top:6%; margin-bottom:5%;">
        <div class="h-100 p-5 bg-light border rounded-3">
        
            <center>
            <br>
          <br>
          <br>
          <br>
          <br>
                <h1>Book Returned Successfully</h1>
                <br>
                <br>
                <br>
                <?php $today=date('Y-m-d');?>
                <?php echo "<h2>Returned On: $today</h2>";?>
          
          <br>
          <br>
          <br>
          <button class="btn btn-info" type="button" ><a href="bookissue.php"style="color:white; text-decoration:none">Go Back</a></button>

        </center>

        
          
          
        </div>
      </div>
</body>
</html>
