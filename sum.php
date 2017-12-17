<?php 
// sum digits in a number 

sumDigits(50);

function sumDigits($n){
	$sum= 0; 
	$count= 0;
	while ($n > 0) {
		# code...
		// $sum = $sum + ($n%10); echo "sum " .$sum; echo "<br>";
		// $n = $n/10;echo "n " .$n; 
		// $count = $count +1;
		$sum= $sum+$n;
		echo $n;
		$n--;
	}
	echo "<br>";
echo $sum;
//echo "count is " .$count;
}


?>