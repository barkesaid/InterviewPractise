<?php

/*
Write a function that returns true if its string parameter is a palindrome (and false otherwise). A palindrome is a string that reads the same backwards or forwards, e.g. "Madam, I'm Adam." Actually, this string would fail the test because it contains white space and punctuation. With parameter "madamimadam", the function would return true.
*/
/* 
*/

$a ="madam";
isPalindrome($a);

function isPalindrome($a){

//typecast to change the type of data type (int), (float), (string)

$b =  strrev($a);

    $string_reverse = str_split($b);
//create an empty variable to hold the reversed string
    $palin = '';

    foreach($string_reverse as $value){

        $palin.= $value; //create a new array with the characters of the first onne- but reversed

        // echo $value; echo "<br>";
    }

    echo "Initial string : ".$a; 
    echo "<br>";

    echo "reversed string: ";
    print $palin;

    if($a == $palin){

        print "<br>Is a Palindrome";

    } else {

        print "<br>Not Palindrome<br>"; 
         // $a1 = (int)$a;
         // $palin1=(int)$palin;
         // addthenumbers($a1,$palin1);

    }


}

// function addthenumbers($a,$palin){
// $results= $a + $palin;

// if($results>=1000000){
//     echo "Stop, we cant continue anymore!";
// }
// else {
//     isPalindrome($results);
// }



//  }



    ?>