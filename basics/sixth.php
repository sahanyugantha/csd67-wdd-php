<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Session - 03 - Superglobal Variables</title>
</head>
<body>

    <?php

        //global keyword.
        $name = "Jon Snow";  

        function greeting(){
            global $name; //To access the global variable.

            echo "<p>Hello ".$name."</p>";
        }
        greeting();


        echo "<hr/>";
        //$GLOBALS variable.
        echo "<h2> &dollar;GLOBALS </h2>";

        $username = "Razeen";

        function welcome(){
            $username = "Fathima";
            echo "<p> Hi, ".$GLOBALS['username']."</p>";
        }

        welcome();

        echo "<hr/>";
        //$_SERVER variable.
        echo "<h2> &dollar;_SERVER </h2>";

        echo "<h3>";
            echo $_SERVER['REQUEST_METHOD'];
        echo "</h3>";


        echo "<hr/>";
        //$_ENV variable. (has been replaced by getenv() and putenv() methods.)
        echo "<h2> getenv() AND putenv() </h2>";

        $id = 569;
        putenv("ID=$id");
        putenv("NAME=CSD67");

        echo "<h3>";
            echo getenv("ID");
        echo "</h3>";
    
    ?>
    
</body>
</html>