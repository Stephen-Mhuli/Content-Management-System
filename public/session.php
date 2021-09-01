<?php
     //Session use cookies which use headers
     //cookies must be done before any HTML output 
     //Unless output buffering is turrned on.
        session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sessions</title>
    </head>
    <body>
   <?php
       $_SESSION['first_name'] = "kelvin";
       $name = $_SESSION['first_name'];
       echo $name;
   ?>
        
    </body>
</html>