<?php

$a = array(7,6,11,3,2); 
$target= 9;

getResults($a, $target);

function getResults($array, $target){

$size = count($array);

if($array ==NULL || $size< 2){
	return NULL;
}

else {
sort($array);


for ($i=0; $i <$size ; $i++) { //keeps count of one number
	for ($j=0; $j<$size ; $j++) { //adds the other numbers to that one number
		# code...
		$res = $array[$i] + $array[$j];	
		if($res == 9){
			echo " the numbers are ".$array[$i]. " and ".$array[$j]."<br>";
			
			}

	}

}

//test
// for ($i=0; $i <$size ; $i++) { //keeps count of one number
// 		$res = $array[$i] + $array[$i+1];	
// 		if($res == 9){
// 			echo " the numbers are ".$array[$i]. " and ".$array[$i+1]."<br>";
			
// 			}

// 	}
//test


}
}

?>
