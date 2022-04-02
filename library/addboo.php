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
    <title>Add Book</title>
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
                <h2>Add a Book</h2>
                <br>
                <br>
                <br>
                <form action="newbook.php" method="post">
                            <div class="mb-3">
                            <label for="bid" class="form-label">BookID</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" name="bid" placeholder="000">
                            </div>
                            <div class="mb-3">
                            <label for="bname" class="form-label">Book Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="bname" placeholder="Harry Potter">
                            </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </center>
        </div>
      </div>
</body>
</html>
