
<?php
/*
(Binary search). Given a sorted integer array segment b[h..k] and an integer x, find the position j such that b[h..j-1] <= x and b[j..k] > x. (by b[h..j-1] <= x, we mean that all values of b[h..j-1] are <= x). Your program should run in time proportional to the logarithm of k+1-h. (Did you have binary search in your previous course? If so, this should be easy.)

*/

//it doesnt work - incomplete!  -solved using cpp


$a = array(2,3,4,6,7,8,10); 

$size = count($a); 

$median = round($size/2);
$new = 5;

//call function
findpos($new,$a,0,$size);


function findpos($new,$a,$start, $end){ 
//round off
$median=round(($start+$end)/2)-1;
echo "medium is" .$median;

if($median <1) {
	return -1;
}
elseif ($new == $a[$median]) {
	echo "element inserted at ".$a[$median];
	# code...
}
elseif($new <$a[$median]){
	findpos($new,$a,0,$median);
}


else {
	findpos($new,$a,0,$median,$end);

}

}



?>