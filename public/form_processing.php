<!DOCTYPE html>
<html>
    <head>
        <title>form processing</title>
    </head>
    <body>
        <?php
       
 
        ?>
        

        <?php
        //detect form submission
        if(isset($_POST['submit'])){
            echo "form was submitted";
             //set default values
        if(isset($_POST['username'])){
            $username = $_POST['username'];
        }else {
            $username = "";
        }
        if(isset($_POST['password'])){
            $password = $_POST['password'];
        }else{
            $password =  "";
        }
           //set default values using ternary operator,alternative for if statement
           $username = isset($_POST['username']) ? $_POST['username'] : " ";
           $password = isset($_POST['password']) ? $_POST['password'] : " ";
        }else{
            echo "form submission failed";
            $username = "";
            $password = "";           
        }
        

        ?>

        <pre>
        <?php
        //print_r($_POST);
        echo "{$username}:{$password}";
        ?>   
        </pre>
    </body>
</html>