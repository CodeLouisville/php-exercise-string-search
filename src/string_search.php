<?php

$myString = "I love PHP programming and my friend Jenny also loves PHP programming!";
$search = "PHP";

function string_search($myString, $search){
	global $myString;
	global $search;
	if($search === ""){
		return false;
	} else {
	return strpos($myString, $search);
	}
}

if(string_search() === false){
	print_r("Needle is empty");
} else {
print_r("find $search at the index " . string_search());
}


