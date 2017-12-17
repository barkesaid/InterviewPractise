<?php
/*
rob houses to get the highest amount of money but done rob adjascent houses otherwise the police alarm goes on
*/
$houses=array(50,30,20,90,89,36,41,21,74,65,32);

$evenhouses = 0; 
$oddhouses= 0 ; 
$endhouses =  0;


$size = count($houses);


for ($i=0; $i < $size; $i+=2) { 
	# code...
	$evenhouses= $evenhouses + $houses[$i];
}

echo $evenhouses;
echo "<br>";


for ($i=1; $i < $size; $i+=2) { 
	# code...
	$oddhouses= $oddhouses + $houses[$i];
	echo $i;
	echo "<br>";
}

echo $oddhouses;
echo "<br>";

for ($i=0; $i < $size; $i+=3) { 
	# code...
	$endhouses= $endhouses + $houses[$i];
	echo $i;
	echo "<br>";
}

echo $oddhouses;



?>