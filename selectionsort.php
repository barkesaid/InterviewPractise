<?php
/*
$my_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(', ',$my_array );
echo "\nSorted Array :\n";
echo implode(', ',selection_sort($my_array)). PHP_EOL;


function selection_sort($data)
{
for($i=0; $i<count($data)-1; $i++) {
	$min = $i;
	for($j=$i+1; $j<count($data); $j++) {
		if ($data[$j]<$data[$min]) {
			$min = $j;
		}
	}
    $data = swap_positions($data, $i, $min);
}
return $data;
}

function swap_positions($data1, $left, $right) {
	$backup_old_data_right_value = $data1[$right];
	$data1[$right] = $data1[$left];
	$data1[$left] = $backup_old_data_right_value;
	return $data1;
}
*/

//doesnt work

$my_array = array(3, 0, 2, 5, -1, 4, 1);

$size = count($my_array);
$sorted = array();
$min = $my_array[0];

echo "array size " .$size; echo "<br>";
 
for ($j=0; $j < $size; $j++) { 
	if($my_array[$j] <$min) {
		$min = $my_array[$j];
		$sorted[]= $my_array[$j];
		echo $min;echo "<br>";
}	
else {
	
}

}

echo "Sorted array: ";echo "<br>";

// foreach ($sorted as  $value) {
// 	# code...
// 	echo $value; echo "<br>";
// }


?>
