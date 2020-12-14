<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Session - 03 - Sorting Arrays</title>
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
        echo "<h2>Array sort</h2>";
        $students = array("Vivethanan", "Razeen", "Anis", "Shahsika", "Zam","Fathima");

        //Ascending order.
        //sort($students);

        //Sort decending order.
        rsort($students);

        foreach($students as $student){
            echo "<p>".$student."</p>";
        }

        echo "<hr/>";
        echo "<h2>Associative array sort</h2>";

        $users = array(
            array("id"=>1, "name"=>"Vivethanan", "age"=>23),
            array("id"=>2, "name"=>"Razeen", "age"=>34),
            array("id"=>3, "name"=>"Anis", "age"=>42),
            array("id"=>4, "name"=>"Shahsika", "age"=>21),
            array("id"=>5, "name"=>"Zam", "age"=>56),
            array("id"=>6, "name"=>"Fathima", "age"=>20)
        );      

    ?>

    <table id="tbl">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
        </tr>

        <?php

            arsort($users); //First try with normal associative array.

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