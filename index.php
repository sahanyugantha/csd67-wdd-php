<?php
    session_start();
    require_once("db_connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <style>
        table, tr, th, td{
            border: 1px solid #000000;
        }
        table{
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td{
            font-size: 24px;
            padding: 5px 8px;
        }
    </style>
</head>
<body>
    
    <?php
        include('navbar.php');

        $sql = "SELECT * FROM tbl_item";

        $stmt = mysqli_prepare($conn,$sql);

        $res = mysqli_stmt_execute($stmt);

        if($res){

            mysqli_stmt_store_result($stmt);

            $num_rows = mysqli_stmt_affected_rows($stmt);

            //id, name, description, qty
            mysqli_stmt_bind_result($stmt, $id, $name, $desc, $qty);
            
            if($num_rows > 0){
                
                ?>
                <div id="tbl-items">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>DESCRIPTIPON</th>
                            <th>QTY</th>
                        </tr>

                        <?php 

                         while(mysqli_stmt_fetch($stmt)) { ?>
                            
                            <tr>
                                <td><?php echo $id;  ?></td>
                                <td><?php echo $name;  ?></td>
                                <td><?php echo $desc;  ?></td>
                                <td><?php echo $qty;  ?></td>
                            </tr>

                        <?php }  ?>
                    
                    </table>
                </div>
                
                <?php


            } else {
                echo "No items available";
            }


        } else {
            echo "<h3> Error occured while accessing database ".mysqli_stmt_error($stmt)."</h3>";
        }
        
    ?>

</body>
</html>