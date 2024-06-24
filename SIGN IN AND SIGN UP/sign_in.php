<?php
include ("connect.php");

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $pw = $_POST["pw"];
    $result = mysqli_query($con, "SELECT * from user_accounts WHERE username ='$username'");
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0){
        if($pw == $row['password']){
            $_SESSION['login'] = 'true';
            $_SESSION['id'] = $row['id'];
            header("location: index.php");
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign In</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .container{
            width:50%;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center">SIGN IN</h1>
        <form method="POST">
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="pw" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
               <a href="sign_up.php">Dont have an account? Sign Up</a> 
            </div>
            
            <button name="submit" type="submit" class="btn btn-primary">Sign In</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" async defer></script>
</body>

</html>