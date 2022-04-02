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
$records=mysqli_query($con, "SELECT bookrecord.bid, bookrecord.bname, student.returnby FROM student INNER JOIN bookrecord WHERE student.bid=bookrecord.bid and student.userid='$user'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Book Return</title>
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
<div style="margin-top:3%">
<?php echo "<h4 style='color:white;text-align:center'>Hello, $user </h4>";?>
<center><button class="btn btn-danger" type="button" style="display:inline;" ><a href="logout.php"style="color:white; text-decoration:none">Logout</a></button></center>

</div>
<div class="col-md-6" style="margin-left:25%; margin-top:8%">
        <div class="h-100 p-5 bg-light border rounded-3">
            <center>
                <h1>GIETU LMS</h1>
                <h2>Book Return</h2>
                <br>
                <form method="post" action="breturn.php">
                <?php while($data = mysqli_fetch_array($records)) 
                {
                ?>
                <tr>
                    <td><h4>You've the following Book Issued:<h4></td>
                    <br>
                    <td><h5>Book ID: </h5><?php echo $data['bid']?><br></td>
                    <td><h5>Book Name: </h5><?php echo $data['bname']?><br></td>
                    <td><h5>Return By: </h5><?php echo $data['returnby']?><br></td>
                </tr>
                <?php
                }
                ?>
                <br>
                <button class="btn btn-success" type="submit" >Return</button>
                </form>
                <br>
                <br>
                <button class="btn btn-info" type="button" ><a href="user.php"style="color:white; text-decoration:none">Go Back</a></button>

        </center>
        </div>
      </div>
</body>
</html>
