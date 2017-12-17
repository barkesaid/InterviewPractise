<?php 

$res= divide(5,5);

echo $res;


function divide($a,$b) {
$count = 0;
$sum= $b;

while ($sum<=$a) {

	$sum= $sum+ $b;
	$count=$count+1;
	# code...
}


return $count;

}


?>
