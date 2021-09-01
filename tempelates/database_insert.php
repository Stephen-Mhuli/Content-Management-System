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
    //often these are coming from $_POST (web form)
  $menu_name = "customers";
  $position = (int) 7; // Type casting
  $visible = (int) 1;
  // Escape all strings
  $menu_name = mysqli_real_escape_string($conn , $menu_name);
    //Thes are often form values in $_POST
  $query = "INSERT INTO subjects (menu_name, position, visible ) VALUES ( '{$menu_name}' , '{$position}', '{$visible}' )";
  $result = mysqli_query($conn, $query);

  //Test if there is a query error.

  if($result){
      //success
      //redirect_to("somepage.php");
      echo 'success!!!...';
    }
      else{
        die('Database query failed.' . mysqli_error($conn));
      
  }

?>