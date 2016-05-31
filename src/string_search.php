<?php

error_reporting(E_ALL);

function string_search($needle, $haystack) {
	$find = strpos($haystack, $needle);
	
	if ($find === true) {
		return "Found $needle at index $find";
	} else {
		return $find;
	}
}