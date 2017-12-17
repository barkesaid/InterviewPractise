<?php

/*
In a native language the increasing order of priority of characters is a, b, c, d, e, f, g, h, i, j, k, l, m, n, ’ng’ , o, p, q, r, s, t, u, v, w, x, y, z. You are given two strings string1 and string2 and your task is to compare them on the basis of the given priority order.

Print ‘0’ if both the strings are equal, ‘1’ if string1 is greater than string2 and ‘-1’ if string1 is lesser than string2. All the strings consist of lowercase English alphabets only.

Test cases

adding addio

abcng abcno

abngc abngc


*/

compare("adding", "addio");

function compare($string1,$string2){

$size1 =  strlen($string1);
$size2 = strlen($string2);


$string1 = str_split($string1);
$string2 = str_split($string2);

$diff1 = '';
$diff2 = '';

if($size1 > $size2) { 
	$len = $size1; 
} 
else {
	$len = $size2;
}

for ($i=0; $i < $len; $i++) { 
	# code...
	if($string1[$i] != $string2[$i]){
		$diff1.= $string1[$i];
		$diff2.= $string2[$i];

	}
}

if($diff1>$diff2) { 
echo "1";
}
elseif ($diff2>$diff1) {
	echo "-1";
	# code...
}
else {
	echo "0";
}
echo "<br>";
echo "difference 2 :".$diff2; echo "<br>";
echo "difference 1 :".$diff1;
}





?>