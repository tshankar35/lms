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
    <title>Book List</title>
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
         background-size:cover;
         
    }
</style>

<body>
<div style="margin-top:5%">
<?php echo "<h4 style='color:white;text-align:center'>Hello, $user </h4>";?>
<center><button class="btn btn-danger" type="button" style="display:inline;" ><a href="logout.php"style="color:white; text-decoration:none">Logout</a></button></center
<div class="col-md-6" style="margin-left:25%; margin-top:11%">
        <div class="h-100 p-5 bg-light border rounded-3">
        
            <center>
            <br>
          <br>
          <br>
          <h2>Book Details</h2>
          <br>
    <table class="table table-dark table-striped table-hover">
        <tr>
            <td>Book ID</td>
            <td>Name</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        <?php
        
        $records= mysqli_query($con, "SELECT * FROM bookrecord"); //Fetch
        while($data = mysqli_fetch_array($records))
        {
            ?>
            <tr>
                <td><?php echo $data['bid']; ?></td>
                <td><?php echo $data['bname']; ?></td>
                <td><a href="editbook.php?id=<?php echo $data['bid'];?>"><button type="button" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="white" class="bi bi-pen" viewBox="0 0 16 16">
                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"></path>
                </svg>
                </svg></a></td>
                <td><a href="deletebook.php?id=<?php echo $data['bid'];?>"> <button type="button" class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                </svg></a></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <?php mysqli_close($con); //Close Connection ?>
    <table>
        <tr>
            <td><center><button class="btn btn-success" type="button" style="display:inline;" ><a href="addboo.php"style="color:white; text-decoration:none">Add a Book</a></button></center></td>
            <td></td>
            <td></td>
            <td><center><button class="btn btn-info" type="button" style="display:inline;" ><a href="dashboard.php"style="color:white; text-decoration:none">Go Back</a></button></center></td>
        </tr>
    </table>
          <br>
          <br>
          <br>
        </center>

        
          
          
        </div>
      </div>
</body>
</html>


