<?php

$haystack = "abracadabra";
$needle = "ab";

function string_search($needle, $haystack){
	
	if($needle === ""){
		return false;
	} else {
		$position = strpos($haystack, $needle);
	
		if($position === false){
			return false;
		} else {
			return "Found '$needle' at index $position";
		}
	}
}



