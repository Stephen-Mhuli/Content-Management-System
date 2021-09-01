<?php

//1.Create database connection.
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'widget_corp';
//connect to db
$conn = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);
         //Checking database connection
         if(mysqli_connect_errno()){
            die("Database connection failed:" . mysqli_connect_error() . "("
            . mysqli_connect_errno() . ")"
          );
        }
        ?>

<?php
    //2. Perform database query
  $id = 5;
  

    //These are often form values in $_POST
  $query = "DELETE FROM subjects ";
  $query .= "WHERE id = {$id} ";
  $query .=  "LIMIT 1";

  $result = mysqli_query($conn, $query);

  //check database 
  if($result && mysqli_affected_rows($conn) == 1){
    //success
    //redirect to ('somepage.php')
    echo "success...!";

  } else{
    die("Database query failed" . mysqli_error($conn));
  }
 

?>