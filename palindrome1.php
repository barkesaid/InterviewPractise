<?php

/*
or uncomment the other lines of code and it will be used for numbers
For numbers: 
GIven a number, see if it is a palidnrome, if not add the original number with the reversed one and check if palindrome again  
*/

$a =556;
isPalindrome($a);

function isPalindrome($a){

//typecast to change the type of data type (int), (float), (string)
$a1 = (string)$a;
$b =  strrev($a1);
// $b1=$b;

    $string_reverse = str_split($b);

    $palin = '';

    foreach($string_reverse as $value){

        $palin.= $value; //create a new array with the characters of the first onne- but reversed
    }

    echo "Initial string : ".$a; 
    echo "<br>";

    echo "reversed string: ";
    print $palin;

    if($a == $palin){

        print "<br>Is a Palindrome";

    } else {

        print "<br>Not Palindrome...adding the two numbers:<br>"; 
         $a1 = (int)$a;
         $palin1=(int)$palin;
         addthenumbers($a1,$palin1);

    }
}

function addthenumbers($a,$palin){
$results= $a + $palin;

if($results>=1000000){
    echo "Stop, we cant continue anymore!";
}
else {
    isPalindrome($results);
}



 }



    ?>