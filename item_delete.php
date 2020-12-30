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

</head>


<body>

    <form action="item_delete.php?id=<?php echo $_GET['id'];?>" method="post">
        <h3>Do really want to delete ? </h3>
        <input name="btn-del-item" type="submit" value="Delete" >
    </form>



<?php

   if(isset($_POST["btn-del-item"])){

        $id = $_GET["id"];

        $sql = "DELETE FROM `tbl_item` WHERE `id` = ?";
        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param($stmt, "i", $id);
        $res = mysqli_stmt_execute($stmt);

        if($res){
           $num_rows = mysqli_stmt_affected_rows($stmt);

           if($num_rows > 0){
               ob_start();
               header("Location:item_control.php");
               ob_end_flush();
               exit();
           } else {
                echo "ERROR : ".mysqli_stmt_error($stmt);
           }


        } else {
            echo "ERROR : ".mysqli_stmt_error($stmt);
        }
   }
        
    

?>

</body>

</html>