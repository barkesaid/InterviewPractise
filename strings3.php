
<?php
/*
$a=array(5,7,8);
permutation1($a);

function permutation1($str){
permutation($str, "");

}


function permutation($str, $prefix){

	if(count($str) == 0){
		echo $prefix;
	}

	else {
		for ($i=0; $i < count($str); $i++) { 
			# code...
			$rem=substr($str,0,$i)+ substr($str, $i+1);
			permutation($rem,$prefix+strpos($str, $i));

		}
	}
}

*/

echo add(1,1);

function add ($a, $b){
	return ($a+$b);
}

?>