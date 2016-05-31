<?php

function string_search($needle, $haystack) {
	
	if ($needle === '') {
		return false;
	}
	
	$find = strpos($haystack, $needle);
	
	if ($find === false) {
		return false;
	} else {
		return "Found '$needle' at index $find";
	}
}