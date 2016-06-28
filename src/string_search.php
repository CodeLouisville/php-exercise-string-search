<?php

function string_search($needle, $haystack) {
    
    $pos = strpos($needle, $haystack);

    if ($needle === "") {
        return false;
    } elseif ($pos || $pos === 0) {
        return "Found '" . $needle . "' at index " . $pos;
    }
}

?>