<?php
    session_start();
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

        #signup-wrapper{
            width : 400px;
            margin: 20px auto;
           
        }

        #signup-wrapper > form{
            background: beige;
            padding: 20px;
        }

        #signup-wrapper form>input{
            margin-bottom: 10px;
        }
        #signup-wrapper form>label{
            display: inline-block;
            min-width: 140px;
        }
    </style>
</head>
<body>

    <?php
        include('navbar.php');
    ?>
    <div id="signup-wrapper">

        <form method="POST" action="register.php" enctype="multipart/form-data">

            <label>Enter username </label>
            <input type="text" name="username" required/> <br/>

            <label>Enter email </label>
            <input type="email" name="email" required/> <br/>

            <label>Enter password </label>
            <input type="password" name="password" required/> <br/>

            <label>Enter mobile </label>
            <input type="text" name="mobile" /> <br/>

            <label>Enter address </label>
            <input type="text" name="address" /> <br/>

            <label>Please upload an image </label>
            <input type="file" name="u-img" accept="image/*"> <br/>

            <input type="submit" name="btn-submit" value="Sign up" />
        
        </form>

    </div>
    
</body>
</html>