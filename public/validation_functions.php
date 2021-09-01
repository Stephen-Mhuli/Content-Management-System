<?php
     //functions for form  validations
//presence
function has_presence($value){
    return isset($value) && $value !== "";
}
//max length
function has_max_length($value, $max){
 return strlen($value) <= $max;
}
//inclusion in a set
function has_inclusion_in_set($value, $set){
return in_array($value, $set);
}
//min length
function has_min_length($value, $min){
    return strlen($value) >= $min;
}
//type
function is_a_string_type($value){
    return is_string($value);
}
//format
function email_format($value){
    return preg_match("/@/",$value);
}
//string position
function email_format_position($value){
    return strpos($value, "@");
}

function form_errors($errors = array()){
    $output = "";
    if(!empty($errors)){
        $output .= "<div class=\"error\" >";
        $output .= "please fix the following errors";
        $output .= "<ul>";
        foreach ($errors as $key => $error){
            $output .= "<li>$error</li>";
        }
        $output .= "</ul>";
        $output .= "</div>";
         
    }
    return $output;
}

?>
