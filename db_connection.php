<?php

//php constants
define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "root");
define("DATABASE", "csd67_db");
define("PORT", "3306"); //if port is default 3306 it can be skipped.

//$host = "localhost"; // can be done like this too.

/** 
 * Types of mysql commands in PHP
 * 
 * mysql (Outdated or we call deprecated).
 * mysqli 
 * pdo
*/

    //create database connection.

    $conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE) 
    or die("Could not connect to the database");

    if($conn){
        echo " Yeh! its connected";
    } 


?>
