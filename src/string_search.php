<?php

function string_search ($needle, $haystack) {
    $position = strpos ($haystack, $needle);

    if ($position === false || $needle === '') {
        return false;
    } else {
        return "Found '$needle' at index $position";
    }
    
}