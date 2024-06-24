<?php
include ("connect.php");

if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $pw = $_POST['pw'];
    $cpw = $_POST['cpw'];
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];

    if($pw == $cpw){
        $sql = "INSERT INTO user_accounts (username, password, firstname, lastname) VALUES('$username', '$pw', '$fn', '$ln')";
        if(mysqli_query($con, $sql)){
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
    else{
        echo 'Password and Confirm Password do not match';
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
        <h1 class="text-center">SIGN UP</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input name="username" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="pw" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input name="cpw" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First Name</label>
                <input name="fn" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                <input name="ln" type="text" class="form-control">
            </div>
            <div class="mb-3">
               <a href="sign_in.php">Have an account? Sign In</a> 
            </div>
            
            <button name="submit" type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" async defer></script>
</body>

</html>