<?php

function string_search($needle, $haystack) {
	if (empty($needle) === true) {
		return false;
	} else {
		$pos = strpos($haystack, $needle);
			if ($pos === 0 || $pos !== false) {
				return "Found '" . $needle . "' at index " . $pos;
			} else {
				return false;
			}
	}
}

$var = string_search('needle', 'HAYneedleSTACK');
var_dump($var);