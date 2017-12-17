<?php 

/*
Compute the median of a one-dimensional array x containing integers, or count the number of zeros in x (each of these actions would be a separate method, returning an integer value). Compute the mean as a floating point number.

*/

$x = array(45,87,0,63,41,74,2,0,36,85,748,964,22,35,21,0);
$size = count ($x);

echo "The number of zeros in the array is " .countzeros($x);
echo "<br>";
echo "The mean as a floating number is: S" .getMean($x,$size);



//count zeros
function countzeros($x){

$zerocount= 0;

foreach ($x as  $value) {
	# code...
	if($value==0){
		$zerocount= $zerocount+1;
	}

	else {

	}
}

return $zerocount;
}

//mean
function getMean($x,$size){
	$sum= 0;
	foreach ($x as  $value) {
		# code...
		$sum= $sum+$value;

	}

	$mean = (float)$sum/$size;

return $mean;

}


?>