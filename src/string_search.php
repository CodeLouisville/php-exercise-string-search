<?php
/*
  Accept two parameters, string to search for (needle) 
  and string to search (haystack).  If needle is found 
  in haystack multiple times, return the first index.
  Otherwise, return false. If needle is empty, return 
  false.
*/

function string_search($n, $h) {

    if ($n == '') {
        return false;
    }
    
    $pos = strpos ( $h, $n );
    
    if ($pos === false) {
        return false;
    } else {
        return "Found '" . $n . "' at index " . $pos;
    }
}
?>
