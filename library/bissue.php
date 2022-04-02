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
$issdatee=date('Y-m-d');
$retdatee=date('Y-m-d', strtotime($issdatee. ' + 7 days'));
$bookid=$_POST['bid'];
$con=mysqli_connect($host, $userid, $pass, $db);
mysqli_query($con, "UPDATE student  set bid='".$_POST['bid']."',issue='$issdatee', returnby='$retdatee' WHERE userid='$user'");
$records=mysqli_query($con, "SELECT * FROM bookrecord where bid='$bookid'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Issue Success</title>
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
<div class="col-md-6" style="margin-left:25%; margin-top:3%; margin-bottom:8%;">
        <div class="h-100 p-5 bg-light border rounded-3">
        
            <center>
            <br>
          <br>
          
                <h1>Book Issued Successfully</h1> 
                <br>
                <br>
                <br>
                <?php while($data = mysqli_fetch_array($records)) 
                {
                ?>
                <tr>
                    <td><h3>Book ID: </h3><?php echo $data['bid']?><br></td>
                    <td><h3>Book Name: </h3><?php echo $data['bname']?><br></td>
                </tr>
                <?php
                }
                ?>
                <br>
                <br>
                <br>
                <?php echo "<h2>Issued On: $issdatee</h2>";?>
                <?php echo "<h2>To Be Returned By: $retdatee</h2>";?>
          
          <br>
          <br>
          <br>
          <button class="btn btn-info" type="button" ><a href="bookissue.php"style="color:white; text-decoration:none">Go Back</a></button>

        </center>

        
          
          
        </div>
      </div>
</body>
</html>
