<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Session - 02 - Arrays</title>
</head>
<body>

    <h1>PHP Arrays</h1>

    <?php

        $students = array("Noah", "Anne", "Jon");

        echo "<p>My name is ".$students[1]."</p>";

        $size = count($students);
        echo "<p>Array size ".$size."</p>";

        for($i = 0; $i < count($students); $i++){
            echo "<p>Student name : ".$students[$i]."</p>";
        }

        //Fixed size arrays.

        echo "<hr/>";

        echo "<h3>Fixed size arrays</h3>";

        $cars = new SplFixedArray(3);
        $cars[0] = "Toyota";
        $cars[1] = "Nissan";
        $cars[2] = "Audi";
        //$cars[3] = "Lamborgini"; 

        $cars->setSize(5); //Programmatically change the array size.
        $cars[3] = "Lamborgini"; 


        foreach($cars as $car){
            echo "<p> Car brand : ".$car."</p>";
        }

        echo "<hr/>";
        //Associative array.

        echo "<h2>Associative arrays</h2>";

        $user = array("id"=>1, "name"=>"Jon Snow", "age"=>30, "gender"=>"male");
        $user["email"] = "jon@winterfell.com";

        //Accesss single value.
       // echo "<p> ".$user["name"]. "</p>";


        foreach($user as $key => $value){
            echo "<p>".$key." - ".$value."</p>";
        }

        echo "<hr/>";
        //Multidimentional array.

        echo "<h2>Multidimentional arrays</h2>";
        $cars = array(
            array("BMW", "520D", 2020),
            array("Audi", "A5", 2017),
            array("Toyota", "Axio", 2014)
        );

        echo "<p> Value ".$cars[1][0]."</p>";
        echo "<p> Value ".$cars[2][1]."</p>";

        // $users = array(
        //     array("id"=>1, "name"=>"Sam", "age"=>23),
        //     array("id"=>2, "name"=>"Will", "age"=>34),
        //     array("id"=>3, "name"=>"Nick", "age"=>24)
        // );


    ?>

</body>
</html>