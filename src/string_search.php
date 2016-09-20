<?php

function string_search($needle, $haystack){
	if ($needle ==""){
		return false;		
	}
	
	$pos = strpos($haystack, $needle);
	
	if ($pos === false ) {
		return false;
		} else {
		return "Found '".$needle."' at index ".$pos;
	}	
}



$inThis = "Some string";
$findThis   = 'string';
var_dump(string_search($findThis, $inThis));


?>

