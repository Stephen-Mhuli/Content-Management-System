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

<?php 
//2. Perform database query
$query = "SELECT * ";   //query in sql
$query .= "FROM subjects ";  
$query .= "ORDER BY position ASC";

  $result = mysqli_query($conn, $query);  //making a query

  //Test if there is a query error.
  if(!$result){
    die("Database query failed. " . mysqli_error($conn));
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>Database connection</title>
</head>
<body>
<ul>
<?php 
//3.Use a returned data (if any)
while($subject = mysqli_fetch_assoc($result)){
  //output data from each row
  ?>
 <li> <?php echo $subject['menu_name'] . "(". $subject["id"] . ")"; ?></li>
  <?php
 }
?>
   </ul> 
<?php
    //4.Release returned data
  mysqli_free_result($result);

?>
</body>

