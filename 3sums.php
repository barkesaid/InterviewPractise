<?php
/*
Given an array S of n integers, are there elements a, b, c in S such that a + b + c = 0? Find all unique triplets in the array which gives the sum of zero.
Note: The solution set must not contain duplicate triplets.
For example, given array S = [-1, 0, 1, 2, -1, -4],
A solution set is:
[   [-1, 0, 1],    [-1, -1, 2]   ]
*/

$a = array(-1, 0, 1, 2, -1, -4);
$size = count($a);

for ($i=0; $i <$size ; $i++) { 
	# code...
	for ($j=0; $j < $size; $j++) { 
		# code...
		for ($k=0; $k < $size; $k++) { 
			# code...
			$sum =$a[$k]+ $a[$i]+$a[$j];
			if($sum == 0){
				echo "the numbers are: "; echo "<br>";
				echo $a[$i];  echo "<br>";
				echo $a[$j] ;  echo "<br>";
				echo $a[$k]; echo "<br>";
				
			}

			else {


			}
		}
	}
				

}





?>