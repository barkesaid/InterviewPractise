<?php 

begin ("eee","ele");

//function
function begin($string1, $string2){

echo "String 1: ".$string1; echo "<br>";
echo "String 2: ".$string2; echo "<br>";

$str1len= strlen($string1);
$str2len= strlen($string2);

//if sizes the same then compare the string contents
	if($str1len==$str2len) {
		//check if strings are the same
		if($string1==$string2) {
			echo "String ".$string1."is equal to ".$string2 ; 
		}
		else {
			//check string contents
			echo "1 replace";

		}
	}

//if one of the strings is greater than the other then an insert / remove happened
	elseif ($str1len > $str2len) {
		$diff = $str1len - $str2len;
		if ( $diff>1 ) {
			echo "More than 1 Remove";
		}
		 else {
		 	echo "1 Remove";
		 }
		

		# code...
		//check if greater 

	}


	//test
	elseif ($str2len > $str1len) {
		$diff = $str2len - $str1len;
		if ( $diff>1 ) {
			echo "More than 1 Insert";
		}
		 else {
		 	echo "1 Insert";
		 }
		

		# code...
		//check if greater 

	}



}





?>