
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
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
<div class="col-md-6" style="margin-left:25%; margin-top:10%">
        <div class="h-100 p-5 bg-light border rounded-3">
            <center>
                <h1>Welcome to GIETU Library Management System</h1>
                <br>
                <br>
                <br>
                <h2>Login</h2>
                
                <form method="post" action="newlogin.php">
                    <div class="input-group mb-3" style="padding-left:25%; padding-right:25%;">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" style="height:100%;"><img src="person-fill.svg" alt=""></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Roll No. Ex:190" aria-label="Username" aria-describedby="basic-addon1" name="user">
                    </div>
                    <div class="input-group mb-3" style="padding-left:25%; padding-right:25%;">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" style="height:100%;"><img src="key-fill.svg" alt=""></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" name="pass">
                    </div>
                <br>
                <br>
                <button class="btn btn-info" type="submit" >Login</a></button>
                </form>
                <br>
                <p>Don't Have An Account?<a href="register.php" style="color:blue">Register</a></p>

        </center>
        </div>
      </div>
</body>
</html>
