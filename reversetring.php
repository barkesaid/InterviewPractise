<?php
// reverse a string
$myString= "This is mine";

$stringsize= strlen($myString);

$reverse = '';
$myString1= str_split($myString);

for ($i=$stringsize; $i >=0 ; $i--) { 
	$reverse.=$myString[$i];
}

// $newstring=strrev($myString);
// echo $myString; echo "\n";

//echo $stringsize; echo "<br>";

echo $reverse;


?>

