<?php

/*
Count the number of zeroes in a rectangular matrix y. For a square array square, determine whether all the diagonal elements have the same value.

*/

//square array 

$square = array
  (
  array(23,22,18,78),
  array(45,15,13,23),
  array(78,5,2,36),
  array(96,17,15,45)
  );
$new = array();

  $size = count($square);

for ($i=0; $i < $size; $i++) { 
	# code...
	for ($j=0; $j < $size; $j++) { 
		# code...
		//check for diagonal elements
		if($i==$j){
			// echo $square[$i][$j];
			// echo "<br>";
			array_push($new,$square[$i][$j]);
		}

		// else {

		// }
		
	}
	if($new[$i]==$new[$i+1]){
			echo "the values are the same";
		}
		else {
			echo "values not the same";
		}
}

foreach ($new as $value) {
	# code...
	echo "<br>";
	echo $value;
	echo "<br>";

}



//rectangle matrix

/*
$rectangle = array
  (
  array(23,22,0,78,1),
  array(45,15,13,0,23),
  array(78,5,2,36,11)
  );

$count= 0;
for ($k=0; $k <3; $k++) { 
	for ($j=0; $j <5; $j++) { 
		// echo "element ".$rectangle[$k][$j];
		// echo "<br>";
		if($rectangle[$k][$j] == 0)
			$count = $count+1;

	}
	}

echo " the number of zeros is ".$count;


*/

?>