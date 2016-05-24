<?php

$haystack = "abracadabra";
$needle = "ab";

function string_search($needle, $haystack){
	
	if($needle === ""){
		return false;
	} else {
	return strpos($haystack, $needle);
	}
}

if(string_search($needle, $haystack) === false){
	print_r("Needle is empty");
} else {
print_r("Found '$needle' at index " . string_search($needle, $haystack));
}


