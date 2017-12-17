<?php

$a = "3:Barke";
$pos= strpos($a, ":");
echo "Semi colon position: ".$pos;

$size= strlen($a);

echo "<br>";

$number= substr($a,0,$pos);

echo "Shifting number: ".$number;
echo "<br>";

$text= substr($a,$pos+1,$size);

// echo $text;

$text1= str_split($text); 

$newString= '';

foreach ($text1 as $value) {
	# code...
	// echo "string character ".$value; echo "<br>";
	$asciiValue = ord($value);

	// echo "Ascii value ".$asciiValue;echo "<br>";

	if ($asciiValue==122) {
		$newascii  = 97;

	}
	 elseif ($asciiValue==90) {
	 	# code...
	 	$newascii=65;
	 }
	 elseif ($asciiValue==57) {
	 	# code...
	 	$newascii=48;
	 }
	 else {
	 	$newascii  = $asciiValue + $number;
	 }

	 // echo "New Value ".$newascii; echo "<br>";
	
	$character = chr($newascii); 
	// echo "new character ".$character;echo "<br>";
	$newString.=$character;


}

echo  "New encrypted String :  " .$newString;



?>