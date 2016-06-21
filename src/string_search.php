<?php
	//$haystack = "intermittent";
	//$needle = "matt";
	//$needle = "mitt";
	//$needle = "";
	
	if($needle !== "") {
	$pos = strpos(strtolower($haystack),strtolower($needle));
	if($pos === false) {
			echo "'$needle' not found."; 
		} else {
			echo "Found '$needle' at position $pos.";
		}
	} else {
		echo "No substring data exists.";
	}
?>