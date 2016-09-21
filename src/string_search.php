<?php
// For this PHP code exercise, create a file named string_search.php. This file should contain a function named string_search() which accepts two parameters. The first is the string to search for (needle) and the second is the string to search (haystack).

// If needle is not found in haystack, string_search() should return false. If needle is found in haystack, string_search() should return string formatted as Found 'needle' at index x where needle is the first parameter and x is the starting index where needle was found.

// For example, if needle were search and haystack were string search, string_search() should return Found 'search' at position 7.

// There are a few special cases:

// If needle is an empty string, string_search() should return false.
// If needle is found in haystack multiple times, string_search() should return the first index.



// $haystack = 'Elephants are afraid of needles!';
// $needle = 'needle';

function string_search($needle, $haystack) {

	if ($needle == '') {
		return false;
	} else {
		$string_search = strpos($haystack, $needle);
		if ($string_search !== false) {
			return "Found '$needle' at index $string_search";
		} else {
			return false;
		}
	}
}

// echo string_search();

?>