<?php


isPrime(10);

function isPrime($n){
	for ($i=2; $i *$i <= $n; $i++) { 
		# code...
		if($n%$i== 0){
			echo "false";
			return false; 

		}

	}

echo "true";
return  true;


}

?>