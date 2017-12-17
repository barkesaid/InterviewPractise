<?php
$string= 'abdchjklefrg';

//test
$rest = substr("abcdef", -2);    // returns "f"
echo $rest;echo "<br>";
//end test

$newString= strtolower($string);

$newString1= strtoupper($string);

$size= strlen($string);

$firstoccurence= strpos("Hello Hellow hellow", "H");

echo $firstoccurence;echo "<br>";

echo $newString1;echo "<br>";

$a = "BArKEABdillah";
$b = "barke";
$res = strcmp($a, $b);

echo $newString;  echo "<br>";

echo $res;


 
//echo $size ;


// $rest = substr("abcdef", -2);    // returns "ef"
// $rest = substr("abcdef", -3, 1); // returns "d"

?>