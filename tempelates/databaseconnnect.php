<?php

//1.Create database connection.
$dbhost = 'localhost';    //host name
$dbuser = 'root';         //database username
$dbpass = '';             //database password
$dbname = 'widget_corp';  //database name
      //Connect to database
$conn = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);
      //Checking if database connection is successfully
     if(mysqli_connect_errno()){
        die("Database connection failed:" . mysqli_connect_error() . "("
            . mysqli_connect_errno() . ")"
         );
       }
?>