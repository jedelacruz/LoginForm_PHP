<?php
include ("connect.php");





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
        .container {
            width: 50%;
        }
    </style>
</head>

<body>
    <div class="container my-5">

    <h1 class="text-center">Welcome</h1>
        <a class="btn btn-primary my-5" href="sign_up.php" role="button">Register</a>

        

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * from  `user_accounts`";
                $result = mysqli_query($con, $sql);

                if ($result) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $username = $row['username'];
                        $password = $row['password'];
                        $firstname = $row['firstname'];
                        $lastname = $row['lastname'];

                        echo '      
                    <tr>
                    <th>' . $id . '</th>
                    <td>' . $username . '</td>
                    <td>' . $password . '</td>
                    <td>' . $firstname . '</td>
                    <td>' . $lastname . '</td>
                    </tr>
        
        ';
                    }
                }



                ?>


            </tbody>
        </table>
    </div>
</body>



</html>