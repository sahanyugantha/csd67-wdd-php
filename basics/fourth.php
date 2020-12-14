<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Session - 03 - Multidiementional Arrays</title>
    <style>
        table, td, tr, th{
            border: 1px solid #000000;
        }
        table {
            border-collapse : collapse;
        }
        td, th {
            padding : 10px;
        }
    </style>
</head>
<body>

    <?php
         //Multidimentional array.

         echo "<h2>Multidimentional arrays</h2>";
         $cars = array(
             array("BMW", "520D", 2020),
             array("Audi", "A5", 2017),
             array("Toyota", "Axio", 2014)
         );
 
        // echo "<p> Value ".$cars[1][0]."</p>";
        // echo "<p> Value ".$cars[2][1]."</p>";

        foreach($cars as $car){
            echo "<p>".$car[0]." - ".$car[1]."</p>";
        }
 
        echo "<hr/>";
         //Multidimentional Associative Array.
        echo "<h2>Multidimentional Associative Array</h2>";

        $users = array(
            array("id"=>1, "name"=>"Sam", "age"=>23),
            array("id"=>2, "name"=>"Will", "age"=>34),
            array("id"=>3, "name"=>"Nick", "age"=>24)
        );

       // echo "Name - ".$users[1]['name'];

       ?>
       
        <table id="tbl">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
            </tr>

            <?php

                foreach($users as $user){

                    echo "<tr>";
                        echo "<td>".$user['id']."</td>";
                        echo "<td>".$user['name']."</td>";
                        echo "<td>".$user['age']."</td>";

                    echo "</tr>";
                }

            ?>

        </table>

      
    
</body>
</html>