<?php 
/*
Given a sentence as a string S. Write a program to calculate difficulty of a given sentence. A word in the given string is considered hard if it has 4 consecutive consonants or number of consonants are more than number of vowels. Else the word is easy. Difficulty of sentence is defined as 5*(number of hard words) + 3*(number of easy words).
Note: uppercase and lowercase characters are same

*/

$string = "Difficulty of sentence";

$word2 = substr($string,0,10);
echo $word2; echo "<br>";

$word3 = substr($string,11,13);
echo $word3; echo "<br>";

$word1 = substr($string,14,22);
echo $word1; echo "<br>";


$res2=  checkDifficulty($word2);
$res3=  checkDifficulty($word3);
$res1=  checkDifficulty($word1);

$total= $res1 + $res2 +$res3;
echo $total;

function checkDifficulty($string){
$hardword = 0;
$easyword = 0;
$string= str_split($string);
$vowels= 0;
$consonants= 0;

foreach ($string as  $value) {

	if($value== 'a' ||$value== 'e' ||$value== 'i' ||$value== 'o' ||$value== 'u'){
		$vowels=$vowels+1;
	}
	elseif($value== ''){
		
	}
		else {
			$consonants = $consonants+1;
}
}

if($consonants > $vowels){
	$hardword= $hardword+1;
}

else {
	$easyword = $easyword+1;
}

$res = (5 * $hardword) + (3 * $easyword);

return $res; 

echo "<br>";
echo "consonants" .$consonants;
echo "<br>";
echo "vowels: ".$vowels; 
echo "<br>";




}

?>