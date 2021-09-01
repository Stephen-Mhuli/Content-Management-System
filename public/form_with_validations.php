<?php
 require_once('included_functions.php');
 require_once('validation_functions.php');
 $errors = array(); 
 $message = "";

if(isset($_POST['submit'])){
    //form was submitted 
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    //validations
    $fields_required = array("username", "password");
    foreach($fields_required as $field){
        $value = trim($_POST[$field]);
        if(!has_presence($value)){
            $errors[$field] = ucfirst($field)." can't be blank";
        }
    }
    $fields_with_max_lengths = array("username"=>30 , "password"=>8);
    foreach($fields_with_max_lengths as $field => $max){
        $value = trim($_POST[$field]);
        if(!has_max_length($value, $max)){
            $errors[$field] = ucfirst($field) . " is too long";
        }
    }
   
    
    if(empty($errors)){
         //try to login
    if($username == "stephen" && $password == "0742726716"){
        //succesful login if its true and redirects to homepage
        redirect_to("homepage.html");
    }else{       
        $message = "Username/passsword do not match";
    }

    }
   
            
}else{
    $username = "";
    $message = "Please log in.";
}
?>             
<!DOCTYPE html>
<html>
    <head>
        <title>web form</title>
    </head>
    <body>
        <?php echo $message; ?>
        <?php echo form_errors($errors); ?>
        <form action="form_with_validations.php" method="post">
            username : <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"/><br />
            password : <input type="password" name="password" value=""/><br />
                       <input type="submit" name="submit" value="submit"/><br />
        </form>
    </body>
</html>