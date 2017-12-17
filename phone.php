
<?php


/*
Given a list of contacts which exist in a phone directory. The task is to implement search query for the phone directory. The search query on a string ‘str’ displays all the contacts which prefix as ‘str’. One special property of the search function is that, when a user searches for a contact from the contact list then suggestions (Contacts with prefix as the string entered so for) are shown after user enters each character

*/


$contacts =  array("geiekistest", "geeksforgeeks", "geeksfortest");

$key = "geee";

searchcontact($contacts,$key); 

function searchcontact ($array, $key){
$size = strlen($key);
$count = count($array);

for ($i=0; $i < $count; $i++) { 
	# code...
	if($key == substr($array[$i],0,$size)){
		echo $array[$i]; echo "<br>";
	}
	

}

}







?>
