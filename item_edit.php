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

        #inventory-wrapper{
            width : 400px;
            margin: 20px auto;
           
        }

        #inventory-wrapper > form{
            background: beige;
            padding: 20px;
        }

        #inventory-wrapper form>input{
            margin-bottom: 10px;
        }
        #inventory-wrapper form>label{
            display: inline-block;
            min-width: 140px;
        }
    </style>
</head>
<body>

    <?php
        include('navbar.php');
    ?>
    <div id="inventory-wrapper">

        <form method="POST" action="item_edit.php?id=<?php echo $_GET["id"];?>">

            <?php

                if(isset($_GET["id"])){

                    $id = $_GET["id"];

                    $sql = "SELECT * FROM tbl_item WHERE id = ?";
                    $stmt = mysqli_prepare($conn, $sql);
                    mysqli_stmt_bind_param($stmt, "i", $id);
                    $res = mysqli_stmt_execute($stmt);
                    if($res){
                        mysqli_stmt_store_result($stmt);
                        $num_rows = mysqli_stmt_affected_rows($stmt);
                        if($num_rows > 0){
                            mysqli_stmt_bind_result($stmt, $id, $name, $desc, $qty);

                            while(mysqli_stmt_fetch($stmt)){
                                ?>

                                    <label>Name </label>
                                    <input type="text" name="i-name" value="<?php echo $name; ?>" /> <br/>

                                    <label>Description </label>
                                    <textarea name="i-description"><?php echo $desc; ?></textarea><br/>

                                    <label>Quantity </label>
                                    <input type="number" name="i-qty" value="<?php echo $qty; ?>"/> <br/>

                                    <input type="submit" name="btn-update-item" value="Update item" />

                                <?php


                            }
                        }
                    }

                }


            ?>

           
        
        </form>


        <?php

            if(isset($_POST['btn-update-item'])){
                    $id = $_GET["id"];
                    $name = $_POST["i-name"];
                    $desc = $_POST["i-description"];
                    $qty = $_POST["i-qty"];

                    //id, name, description, qty
                    $sql = "UPDATE tbl_item SET name=?, description=?, qty=? WHERE id = ?";
                    $stmt = mysqli_prepare($conn, $sql);
                    mysqli_stmt_bind_param($stmt, "ssii", $name, $desc, $qty, $id);
                    $res = mysqli_stmt_execute($stmt);
                    if($res){
                        $num_rows = mysqli_stmt_affected_rows($stmt);
                        if($num_rows > 0){
                            //Please redirect to the inventory control.
                            echo "Successfully updated";
                        } else {
                            echo "Invalid data";
                        }
                    } else {
                        echo "ERROR ".mysqli_stmt_error($stmt);
                    }
                
            }
        
        ?>

    </div>
    
</body>
</html>