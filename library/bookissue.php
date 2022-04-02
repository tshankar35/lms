<?php
session_start();
if($_SESSION['user']=='')
{
	header("location:newlogin.php");
}
$user=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Book Issue</title>
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
<div style="margin-top:2%">
<?php echo "<h4 style='color:white;text-align:center'>Hello, $user </h4>";?>
<center><button class="btn btn-danger" type="button" style="display:inline;" ><a href="logout.php"style="color:white; text-decoration:none">Logout</a></button></center>

</div>
<div class="col-md-6" style="margin-left:25%; margin-top:5%">
        <div class="h-100 p-5 bg-light border rounded-3">
            <center>
                <h1>GIETU LMS</h1>
                <h2>Book Issue</h2>
                <br>
                <br>
                <br>
                <form method="post" action="bissue.php">
                    <div class="input-group mb-3" style="padding-left:25%; padding-right:25%;">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" style="height:100%;"><img src="book-fill.svg" alt=""></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Book ID" aria-label="Book ID" aria-describedby="basic-addon1" name="bid">
                        <div id="basic-addon1" class="form-text">Enter Book ID from the Physical Copy of Book</div>
                    </div>
                <br>
                <br>
                <button class="btn btn-info" type="submit" >Submit</a></button>
                </form>
                <br>
                <br>
                <button class="btn btn-info" type="button" ><a href="user.php"style="color:white; text-decoration:none">Go Back</a></button>

        </center>
        </div>
      </div>
</body>
</html>
