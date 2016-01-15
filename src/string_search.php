<?php

string_search ($needle, $haystack) {
    $position = stripos ($haystack, $needle);

    if ($position === false || $needle === '') {
        return false;
    } else {
        return "Found '$needle' at index $position";
    }
    
}