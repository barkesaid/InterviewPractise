<?php


/*
Write a function that returns its string parameter but with punctuation and spaces removed and letters turned into lower case. Now if you call your function from problem 1 with the output of this new function, "Madam, I'm Adam." would pass the test.

*/

$a = "Barke_Said Abdilahi.....123!";

stripformatting($a);



function stripformatting($a){

$b = str_split($a);

foreach ($b as $value) {
	# code...
	//we only have a few punctuation marks , . _ - ! 
	if($value== ' ' || $value=='!' || $value== ',' || $value== '.'  || $value== '-'|| $value=='_' ||$value=='...' ) {

			// do nothing
	}

	else  {
		echo strtolower($value);

	}

}




}



?>