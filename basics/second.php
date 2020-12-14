<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Session - 02</title>
</head>
<body>
    

    <?php

        echo "<h3>Hello from PHP</h3>";

        //Method declaration.
        function greeting(){

            echo "<p>Hello from PHP function</p>";

        }
        //Method execution.
        greeting();


        //Method with parameters.

        function bmiCal($weight, $height){
            $bmi = $weight / ($height*$height); //kilograms and meters

            echo "<h4>BMI : ".$bmi."</h4>";
        }

        bmiCal(78.1, 1.65);


        //Functions with return value.

        function add($num1, $num2){
            $total = $num1 + $num2;
            return $total;
        }

        $answer = add(45,55);

        echo "<h5>Answer is ".$answer."</h5>";

        //Static Variables.

        echo "<h2>Static Variables</h2>";

        function myTest(){
            static $x = 0;
            echo $x."<br/>";
            $x++;
        }

        myTest();
        myTest();
        myTest();


    ?>

</body>
</html>