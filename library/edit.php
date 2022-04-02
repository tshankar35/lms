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
    $id = $_GET['id'];
    $sql = mysqli_query($con, "SELECT * FROM student WHERE userid='$id'");
    $eidt= mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Student</title>
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
<?php echo "<h4 style='color:white;text-align:center'>Hello, $user </h4>";?>
<center><button class="btn btn-danger" type="button" style="display:inline;" ><a href="logout.php"style="color:white; text-decoration:none">Logout</a></button></center>
<div class="col-md-6" style="margin-left:25%; margin-top:11%">
<center>
        <div class="h-100 p-5 bg-light border rounded-3">
        <fieldset>
        <legend>Student Details Edit</legend>
        <form name='frmContact' method='post' action='updatestu.php'>
            <p>
                <label for="ID" class="form-label">Roll No. / Username</label>
                <input type="text" name="id" id="id" class="form-control" value="<?php echo $eidt ['userid'];?>"readonly>
            </p>
            <p>
                <label for="Name" class="form-label">Name</label>
                <input type="text" name="txtName" id="txtName" class="form-control"value="<?php echo $eidt ['name'];?>">
            </p>
            <p>
                <label for="bid" class="form-label">Book ID of Issued Book</label>
                <input type="text" name="bid" id="bid" class="form-control"value="<?php echo $eidt ['bid'];?>">
            </p>
            <p>
                <label for="issuedate" class="form-label">Book Issued On</label>
                <input type="date" name="issuedate" id="issuedate" class="form-control"value="<?php echo $eidt ['issue'];?>"readonly>
            </p>
            <p>
                <label for="returndate" class="form-label">Return By</label>
                <input type="date" name="returndate" id="returndate" class="form-control" value="<?php echo $eidt ['returnby'];?>">
            </p>
            <p>&nbsp</p>
            <p>
                <input type="submit" class="btn btn-success" value="Update" name="Edit" id="Submit">
            </p>
        </form>
    </fieldset>

        
          
          
        </div>
        </center>
      </div>
</body>
</html>
