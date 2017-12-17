<?php

$a= array(4,7,8,5,4,7,9,6,3,1,5);
$size = count($a);

for ($i=0; $i <$size/2 ; $i++) { 
	# code...
	$other = $size-$i-1;
	$temp = $a[$i];
	$a[$i]= $a[$other];
	$a[$other]=$temp;
}

for ($i=0; $i < $size; $i++) { 
	# code..

	echo $a[$i];
	echo "<br>";

}

?>
