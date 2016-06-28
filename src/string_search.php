<?php

function string_search($needle, $haystack) {
    
   if ($needle === "") {
        return false;
    }
    $pos = strpos($haystack, $needle);
    if ($pos !== false) {
        return "Found '" . $needle . "' at index " . $pos;
    } else {
        return false;
    }
}

?>