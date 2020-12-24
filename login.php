<?php
    
    session_start();
    require_once('db_connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>

    <style>
        body {
            min-height: 2vh;
            background: linear-gradient(90deg, #9d9d9d, white, #c1c4c4);
        }

        #login-wrapper{
            width : 400px;
            margin: 20px auto;
           
        }

        #login-wrapper > form{
            background: #a0bcf0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 2px 2px 3px #b0abab;
        }

        #login-wrapper form>input{
            margin-bottom: 10px;
        }
        #login-wrapper form>label{
            display: inline-block;
            min-width: 140px;
        }

        #btn-wrapper{
            width : 125px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

    <?php

        include('navbar.php');

    ?>

    <div id="login-wrapper">

        <form method="POST" action="login.php">

            <label>Enter email </label>
            <input type="email" name="u-email" required/> <br/>

            <label>Enter password </label>
            <input type="password" name="u-password" required/> <br/>


            <div id="btn-wrapper">
                <input type="submit" name="btn-login" value="Login" />
                <a href="signup.php"> <button type="button">Sign up</button> </a>
            </div>
        </form>

    </div>
    
    <?php
        if(isset($_POST['btn-login'])){

            $email = $_POST['u-email'];
            $pass  = $_POST['u-password'];

            $sql = "SELECT * FROM `tbl_user` WHERE `email` = ? AND `password` = ?";

            $stmt = mysqli_prepare($conn, $sql);

            mysqli_stmt_bind_param($stmt, "ss", $email, $pass);

            $res = mysqli_stmt_execute($stmt);

            if($res){

                mysqli_stmt_store_result($stmt); // this would for check num rows with SELECT queries.
                $num_rows = mysqli_stmt_affected_rows($stmt);

               if($num_rows == 1){
                   // echo "Successfully logged in";

                   //id, username, email, password, mobile, address, role
                   mysqli_stmt_bind_result($stmt, $id, $username, $email, $password, $mobile, $address, $role);

                   while(mysqli_stmt_fetch($stmt)){

                        //echo "Name ".$username;

                        $_SESSION["email"] = $email;
                        $_SESSION["username"] = $username;
                        $_SESSION["mobile"] = $mobile;
                        $_SESSION["address"] = $address;
                        $_SESSION["role"] = $role;

                        setcookie("logged_in", true, (time()+60*60), "/");
                        setcookie("username", $username, (time()+60*60), "/");


                   }

                   ob_start();
                   header("Location:index.php");
                   ob_end_flush();
                   exit();

               } else {
                echo "Please enter valid email and password ";
               }

            } else  {
                echo "Please check the email and password ";
            }


        }    
    ?>
</body>
</html>