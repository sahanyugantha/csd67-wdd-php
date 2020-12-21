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
<body>
    
    <?php
        include('navbar.php');
    ?>

    
    <h1>Welcome to the PHP</h1>

    <?php

        echo "<p> Hello, World! </p>"; //recommend.
        print "<p> This also can be used </p>"; // much slower than the echo.
    
        /**
         * PHP Variables
         */

        $name = "Will Smith";

        //Concatination of strings with period symbol.
        echo "<p> Hello ".$name."!</p>";

        $num1 = 30.78;
        $num2 = 42.50;

        $total = $num1 + $num2;
        echo "Answer : ".$total;


        $is_married = false;

        if($is_married == true){
            echo "<p>Married</p>";
        } else {
            echo "<p>Single</p>";
        }
    
    ?>

</body>
</html>