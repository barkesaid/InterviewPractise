<?php

/*
Given integers b and c, compute b/c as an integer (rounded to the nearest integer).  That is, round down if the remainder is less than 1/2, and up if the remainder is 1/2 or more.  The value returned by the method should be an integer, not a floating point number.
*/

$a= 65;
$b= 3;


dividenums($a,$b);

function dividenums($a,$b){

$results= (float) $a/$b;
echo $results; 
echo "<br>";

$results= (string)$results;
$decipos= strpos($results, ".");

$number= substr($results,0,$decipos);
$number= (int)$number;

$remainder= substr($results, $decipos, strlen($results-1));
$remainder= (float)$remainder;

if($remainder < 0.5){
echo $number;
}
else {

	$number=  $number+1;
	echo $number;
}

}


?>