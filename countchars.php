<?php

$a = "aabbccccdde";

$a1 = str_split($a);
$b='';

$new= '';
$arraycount=array();

for ($i=0; $i < strlen($a); $i++) { 
	$count = 0;
	if($a1[$i] == $a[$i+1]){
		$new.=$a[$i];
		$count = $count +2 ;
		$arraycount[]=$count;
		$i+=1;
	
	}
	else {
		$count= 1;
	}



	echo $count;
	 echo $a[$i];
}




?>