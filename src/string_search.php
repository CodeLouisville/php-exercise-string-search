<?php

$haystack = "I love PHP programming and my friend Jenny also loves PHP programming!";
$needle = "PHP";

function string_search($haystack, $needle){
	global $haystack;
	global $needle;
	if($needle === ""){
		return false;
	} else {
	return strpos($haystack, $needle);
	}
}

if(string_search() === false){
	print_r("Needle is empty");
} else {
print_r("find $needle at the index " . string_search());
}


