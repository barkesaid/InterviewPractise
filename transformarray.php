<?php

/*
Given an array containing integers, zero is considered an invalid number and rest all other numbers are valid. If two nearest valid numbers are equal then double the value of the first one and make the second number as 0.At last move all the valid numbers on the left.

*/

$a = array(2,4,5,0,0,5,4,8,6,0,6,8); 

$size= count($a);

$a1 = array();
foreach ($a as  $value) {
	# code...
	if($value == 0){

	}
	else {
		array_push($a1,$value);
	}
}


for ($j=0; $j < $size; $j++) { 
	for ($i=0; $i < $size; $i++) { 
		if($a1[$i] == $a1[$i+1]){
			$sum = $a1[$i]+$a1[$i+1];
			$a1[$i] = $sum;
			$a1[$i+1] = 0;

		}
	}
}


// foreach ($a1 as $value) {
// 	# code...
// 	echo $value;
// 	echo "<br>";

// }


$a2 = array();
$count= 0;
foreach ($a1 as $value) {
	# code...
	if($value == 0){
		$count = $count+1;
	}
	else {
		array_push($a2,$value);
	}
}


for ($i=0; $i < $count; $i++) { 
	# code...
	array_push($a2,0);

}
	echo "<br>";
		echo "<br>";
			echo "<br>";
				echo "<br>";

foreach ($a2 as $value) {
	# code...
	echo $value;
	echo "<br>";

}



?>