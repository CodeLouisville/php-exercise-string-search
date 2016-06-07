<?php

function string_search($needle, $haystack){
	if ($needle === "") {
		return false;
	} else {
		$result = strpos($haystack, $needle);
		var_dump($result);
		if ($result || $result === 0){
			return "Found '".$needle."' at index ".$result;
		} else {
			return false;
		}
	}

}

echo string_search("ab", "abracadabra");
?>