<html>
 <head>
   <title> eLearning </title> 
 </head>
 <body> 
 <h2>Strings </h2>
    <?php
    
    echo "Hello there<br />";
    $greeting = "Hello";
    $target =  "JJ";
    $phrase = $greeting . " " . $target;
    echo $phrase;
    
    ?>
    <br />
    <?php
   echo "{$phrase} again<br /><br />";
    ?>
    <h2>String functions</h2>
    <?php 
    
    $first = "The Quick brown fox";
    $second =" jumped over a lazy dog";
    $third = $first;
    $third .= $second;
    echo $third;
    ?>
    <br />
 Lowercase: <?php echo strtolower($third); ?><br />
 Uppercase: <?php echo strtoupper($third); ?><br />
 First letter uppercase: <?php echo ucfirst($third); ?><br />
 All letters Uppercase: <?php echo ucwords($third); ?><br />
 <br />
 Length: <?php echo strlen($third); ?><br />
 Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br />
 Find: <?php echo strstr($third, "fox"); ?><br />
 Replace by string: <?php echo str_replace( "Quick" ,"Super-fast" , $third); ?><br />
 Replace by string: <?php echo str_replace( "fox" ,"lion" , $third); ?><br />
 <br />
 Repeat: <?php echo str_repeat($third, 3); ?><br />
 Make substring:<?php echo substr($third, 4 , 6); ?><br />
 Find position: <?php echo strpos($third, "dog"); ?><br />
 Find character: <?php echo strchr($third, "j"); ?><br /><br />

    <h2>Integers</h2>
    <?php 
    $var1 = 6;
    $var2 = 4;
    ?>
    Math operation: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?>
    <br />
    Absolute value: <?php echo abs(2-100); ?><br />
    Exponential : <?php echo pow(2, 8); ?><br />
    Square root : <?php echo sqrt(100.0); ?><br />
    Modulo : <?php echo fmod(5,2); ?><br />
    Random : <php  $r1 = rand(); echo $r1 ?><br />
    Random (min,max) : <php $r2 = rand( 1,10); echo $r2 ?><br />
    <br />
    += : <?php $var1 += 3; echo $var1 ?><br />
    -= : <?php $var1 -= 3; echo $var1 ?><br />
    *= : <?php $var1 *= 3; echo $var1 ?><br />
    /= : <?php $var1 /= 3; echo $var1 ?><br />
    %= : <?php $var1 %= 3; echo $var1 ?><br />
    <br />
    Increment : <?php $var1 +=1; echo $var1; ?><br />
               <?php $var1++; echo $var1; ?><br /> <!-- Better way -->
    Decrementing : <?php $var2--; echo $var2; ?><br />
    <br />
   <?php echo 1 + "2"; ?><br />
     
     
     <h3>Floating point numbers</h3>
     
      <?php $float = 3.14; echo $float; ?><br />
       <?php $float += 7 ; echo $float; ?><br />
       <?php echo 4/3; ?><br />
       <?php //echo 4/0; ?><br />
       <br />
       Round : <?php echo round(3.1476, 2); ?><br />
       Ceiling : <?php echo ceil(3.1476); ?><br />
       floor : <?php echo floor(3.1476); ?><br />
       <br />

       <?php $integer = 3; ?> <br />
       <?php echo "is {$integer} integer? ".is_int($integer); ?><br />
       <?php echo "is {$float} integer? ".is_int($float); ?><br />
        <br />
       <?php echo "is {$integer} float? ".is_float($integer); ?><br />
       <?php echo "is {$float} float? ".is_float($float); ?><br />
       <br />
       <?php echo "is {$integer} numeric? ".is_numeric($integer); ?><br />
       <?php echo "is {$float} numeric? ".is_numeric($float); ?><br />
<br />
<br />
       <h3>ARRAYS</h3>

     <?php $numbers = array(2,4,8,10,16,25,32,40);
           echo $numbers[0];
      ?>

      <?php $mixed_array = array(3, "fox", "dog", array("x", "y", "z")); ?><br /> 
      <?php    echo $mixed_array[1]; ?><br />
      <?php    echo $mixed_array[2]; ?><br />
      <?php    echo $mixed_array[3][2];  ?><br />

      <?php    $mixed_array[2] = "simba"; ?><br />
      <?php    $mixed_array[4] = "wizkid"; ?><br />
      <?php    $mixed_array[5] = 500; ?><br />
      <?php    $mixed_array[6] = "kutoka"; ?><br />
      <?php     $mixed_array[3][2] = "234";  ?><br />
      <?php     $mixed_array[] = "pizza";  ?><br />
     
      <?php 
      //5.4 and above array short notation
      $array = [1, 3, 5, 7];  ?><br />
      

      <pre>
      <?php    print_r($mixed_array);  ?><br />
      </pre>
      <br /> <br />

      <h2>Associative arrays</h2><br />
    <?php  $assoc = array("first_name" => "kevin", "last_name" => "kejo"); ?><br />
    <?php echo $assoc["first_name"]; ?><br />
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

    <?php $assoc["first_name"] = "Larry"; ?><br />
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />
       <br /><br />

       <h2>Array functions</h2>
       <?php $number = array(23,5,8,2,15,9); ?><br />
      Count : <?php echo count($number); ?><br />
      Maximu : <?php echo max($number); ?><br />
      Minimum : <?php echo min($number); ?><br />
      <br />
      <pre>
      Sort : <?php sort($number); print_r($number); ?><br />
      Reverse Sort : <?php rsort($number); print_r($number); ?><br />
      </pre>
      <br />

      Implode : <?php  $num_string = implode("*",$number); ?><br />
      <?php  echo $num_string; ?><br />

      Explode : <?php print_r(explode("*",$num_string)); ?><br />

      12 in an array? : <?php echo in_array(12,$number); ?><br />
      15 in an array? : <?php echo in_array(15,$number); ?><br />
      <br />

      <h2>Null and empty</h2>
      <?php 
          $vari1 = null;
          $vari2 = "";
      ?>
      <!-- null or not,returns true/false -->
      vari1 is null? : <?php echo is_null($vari1); ?><br />    
      vari2 is null? : <?php echo is_null($vari2); ?><br />
      vari3 is null? : <?php echo is_null($vari3); ?><br /> 
      <!-- set or not set,returns true/false -->
      vari1 is set? : <?php echo isset($vari1); ?><br /> 
      vari2 is set? : <?php echo isset($vari2); ?><br />
      vari3 is set? : <?php echo isset($vari3); ?><br />   
      <!-- empty or not,returns true/false     -->
      <!-- empty : "",null,0,0.0,"0",false,array() -->
      <?php $vari3 = "0"; ?>
      vari1 is empty? : <?php echo empty($vari1); ?><br />
      vari2 is empty? : <?php echo empty($vari2); ?><br />
      vari2 is empty? : <?php echo empty($vari3); ?><br />

      <h2>Type casting and juggling</h2>
         type juggling<br />
      <?php $count = "2"; ?>
      Type : <?php echo gettype($count); ?><br />
      <?php $count += 3; ?>
      Type : <?php echo gettype($count); ?><br />
      <?php $cats = "I have " . $count . " cats"; ?>
      Type cats : <?php echo gettype($cats); ?><br />
      <br />

      type csting <br />
      <?php settype($count, "integer"); ?><br />
      Type : <?php echo gettype($count); ?><br />






       
      





 </body>
</html>