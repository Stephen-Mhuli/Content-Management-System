<!DOCTYPE html>
<html>
    <head>
        <title>Form validations</title>
    </head>
    <body>
        <?php
        require_once('validation_functions.php');

        $errors = array();
        //$username = trim($_POST['username']);
        $username = trim("kevins");

        if(!has_presence($username)){
            $errors['username'] = "Username can't be blank";
        }

        ?>
        <?php

        echo form_errors($errors);

        ?>
    </body>