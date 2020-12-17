<?php

    require_once('db_connection.php');

    //since we use the post method data can retrieve from $_POST[] super global array.

    //we can whether variable is set or not by isset($var) method.
    
        if(isset($_POST['btn-submit'])){

            $username = $_POST['username'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $mobile = $_POST['mobile'];
            $addr = $_POST['address'];

           //mysqli_query() this can be used. but need to do lots of work to prevent from SQL injection.


            $sql = "INSERT INTO `tbl_user`  (`username`, `email`, `password`, `mobile`, `address`) VALUES (?,?,?,?,?);";
            $stmt = mysqli_prepare($conn, $sql);
            
            mysqli_stmt_bind_param($stmt, "sssss", $username, $email, $pass, $mobile, $addr);

            $res = mysqli_stmt_execute($stmt);
            
            if($res){
                $num_rows = mysqli_stmt_affected_rows($stmt);

                if($num_rows > 0) {
                    echo "Successfully inserted";
                } else {
                    echo "Invalid records <br/>";
                    echo mysqli_stmt_errno($stmt)." Error : ".mysqli_stmt_error($stmt);
                }
            } else  {
                echo "Invalid records, Please check your inputs<br/>";
                echo mysqli_stmt_errno($stmt)." Error : ".mysqli_stmt_error($stmt);
            }
            
            


        } else  {
            //Redirecting to signup page.

            ob_start();
            header("Location:signup.php");
            ob_end_flush();
            exit(); // or die();

        }

?>