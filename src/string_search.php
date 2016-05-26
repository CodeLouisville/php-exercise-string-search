<?php

function string_search($needle, $haystack){
	
	if(empty($needle) || !strstr($haystack, $needle)){
		return false;
	} else{
		$x = strpos($haystack, $needle);
		echo "Found '".$needle."' at index ".$x;
		//return true;
	}
}

//var_dump(string_search("Code Louisville", "Searching Code Louisville."));

//string_search("Code Louisville", "Searching Code Louisville.");

//var_dump(string_search("zx", "Searching Code Louisville."));