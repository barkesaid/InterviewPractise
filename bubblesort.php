><?php
/*
bubble sort

*/

$a = array(7,85,96,32,4,7,954,213,789,2,3,1);

//call function 
sortarray($a);

function sortarray($a){
	$size = count($a);
// sort the array
for ($i=0; $i <$size ; $i++) { 
	# code... 
	for ($j=0; $j <$size-1 ; $j++) { 
		# code...
		if($a[$j] > $a[$j+1]){
			$temp = $a[$j];
			$a[$j] = $a[$j+1];
			$a[$j+1]= $temp;

		}
	}
}

for ($i=0; $i < $size; $i++) { 
	# code...
	echo $a[$i];
	echo "<br>";
}

}


?>



