<?php
session_start();
if($_SESSION['user']=='')
{
	header("location:newlogin.php");
}
$user=$_SESSION['user'];
?>
<!doctype html>
<html lang="en">

<head>
  <title>Librarian Dashboard</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
 
  btn-primary
  {
    border: 13%;
    shape-margin: 2%;
  }
  .container {
    padding: 5% 2%;
    border: 2px  ;
    margin-top: 7%;
    width: 43%;
    background-color: #FEF5ED; 
    background: rgb(255, 255, 255,.8);
    border-radius: 3%;

    


  }

  body {
    background-size: 100%;
    background-repeat: no-repeat;
    background-image: url(librarystudent.jpg);
  }
  h1
  {
   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }
</style>

<body>
<div style="margin-top:5%">
<?php echo "<h4 style='color:white;text-align:center'>Hello, $user </h4>";?>
<center><button class="btn btn-danger" type="button" style="display:inline;" ><a href="logout.php"style="color:white; text-decoration:none">Logout</a></button></center>

</div>



  <center>

    <div class="container" >

      <h1>Admin Dashboard</h1> 
      <br>

      <a href="studentview.php" class="btn btn-primary btn-lg btn-info  btn-lg active rounded" role="button" aria-pressed="true">Modify Student Records</a>
      <br><br>
      <a href="bookview.php" class="btn btn-primary btn-lg  btn-info btn-lg active rounded" role="button" aria-pressed="true">Modify Book Records</a>


    </div>
  




  </center>




  
</body>

</html>