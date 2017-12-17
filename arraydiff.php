<?php
$a =array(9,5,7,4,2,1,3,0);

$min = $a[0];

$max=$a[0];


for ($i=0; $i < count($a); $i++) { 
	if($a[$i] > $max){
		$max= $a[$i];
	}

	elseif ($a[$i] < $min){
		$min= $a[$i];
	}

} 

echo $min; 
echo "<br>";
echo $max;


?>
