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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Student Add</title>
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
<div style="margin-top:5%">
<?php echo "<h4 style='color:white;text-align:center'>Hello, $user </h4>";?>
<center><button class="btn btn-danger" type="button" style="display:inline;" ><a href="logout.php"style="color:white; text-decoration:none">Logout</a></button></center>
<div class="col-md-6" style="margin-left:25%; margin-top:11%">
        <div class="h-100 p-5 bg-light border rounded-3">
            <center>
                <h1>GIETU LMS</h1>
                <h2>Add a Student</h2>
                <br>
                <br>
                <br>
                <form action="newregadmin.php" method="post">
                            <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Rajiv">
                            </div>
                            <div class="mb-3">
                            <label for="userid" class="form-label">College Roll Number</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="userid" placeholder="20CSE190">
                            </div>
                        <div class="mb-3">
                            <label for="pswd" class="form-label">Password</label>
                            <input type="password" class="form-control" id="pswd" name="pswd" placeholder="••••••••••••••">
                        </div>
                        <div class="mb-3">
                            <label for="cnfpswd" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="cnfpswd" name="cnfpswd">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </center>
        </div>
      </div>
</body>
</html>
