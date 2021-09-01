<?php
  //Remember: setting cookies must be done before any HTML output 
  //Unless output buffering is turrned on.
        $name = "test";
        $value = "hello";
        $expire = time() + (60*60); //add seconds
        setcookie($name, $value, $expire);

        //  setcookie($name);
        //setcookie($name, null, $expire);
         //setcookie($name, null);
          //setcookie($name, $value, time()-3600);
 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cookies</title>
    </head>
    <body>
        <pre>
        <?php  
        if(isset($_COOKIE['test'])){
            $test = $_COOKIE['test'];
        }else{
            $test = "";
        }
        
        echo $test;
        ?>
        </pre>
        
    </body>
</html>