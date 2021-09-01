<!DOCTYPE html>
<html>
    <head>
        <title>Form validations</title>
    </head>
    <body>
        <?php

        //presence
        $value = "";
        if(!isset($value) || empty($value)){
            echo "Validation failed : empty<br />";
        }

        //String length       
        $min = 3;//minimum length
        $max = 6;//maximum length
        $value = "stevo";
        if(strlen($value) < $min){
            echo "Validation failed : {$value}<br />";
        }elseif(strlen($value) > $max){
            echo "Validation failed : {$value}<br />";
        }else{
             echo "validation successful : {$value}.<br />";
        }

        //type
        $value = 1;
        if(!is_string($value)){
            echo "validation failed : {$value}.<br />";
        }

        //inclusion in a set
        $value = "7";
        $set = array("1","2","3","4","5","6");
        if(!in_array($value, $set)){
            echo "validation failed : {$value}.<br />";
        }

        //*Uniqueness,leave for now until database section.Uses a db to check uniqueness

        //Format.
        //using regular expression on a string
        // preg_match($regx,$subject)
        if(preg_match("/PHPc/","PHP is fun")){
            echo "match was found <br />";
        }else{
            echo "match was not found<br />";
        }
        //example
        $value = "stevemshible@gmail.com";
        if(!preg_match("/@/",$value)){
            echo "validation failed<br />";
        }
        //for position
        $value = "stevemshiblegmail.com";
        if(strpos($value, "@") == false){
            echo "validation failed <br />";
        }

        ?>
    </body>
</html>