<?php
/*
Two strings are given. Modify 1st string such that all the common characters of the 2nd strings have to be removed and the uncommon characters of the 2nd string have to be concatenated with uncommon characters of the 1st string.

*/

$a = "gafd";
$b= "aacdb";

$sizea= strlen($a);
$sizeb= strlen($b);

// $a= str_split($a); 
// $b= str_split($b);

//common characters of second string
$commonfromsecond = '';
$uncommonfromsecond = '';
$uncommonfromfirst= '';


for ($i=0; $i < $sizea; $i++) { 
	# code...
	for ($j=0; $j < $sizeb; $j++) { 
	
		//common characters
		if($a[$i]==$b[$j]) {
			$commonfromsecond.= $b[$j];

		}

	}
		if ($a[$i]!=$b[$i]) {
			$uncommonfromfirst.= $a[$i];
			// $uncommonfromsecond.= $b[$i];

		}

		if($a[$i]!=$b[$i]) {
			$uncommonfromsecond.= $b[$i];
		}

}

echo "results: ";
echo $uncommonfromsecond;
echo $uncommonfromfirst;
echo "<br>";




echo "Uncommon from first " .$uncommonfromfirst;

echo "<br>";

echo "common from second " .$commonfromsecond;

echo "<br>";

echo "Uncommon from second " .$uncommonfromsecond;

echo "<br>";




?>