<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>

</head>

<form action="logout.php" method="post">

    <h3>Do really want to logout ? </h3>
    <input name="btn-logout" type="submit" value="Logout" >

</form>


<?php

    if(isset($_POST['btn-logout'])){

        // just for specific session data to be unset
        session_unset("username");
        session_unset("email");

        // //To kill all the session data
        session_destroy();


        //Remove cookies
        setcookie("logged_in", "", (time()- 100), "/");
        setcookie("username", "", (time()-100), "/");



        ob_start();
        header("Location: login.php");
        ob_end_flush();
        exit();
        
    }

?>