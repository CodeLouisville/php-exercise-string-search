<?php

function string_search($needle, $haystack) {
        if ($needle !== "") {
            $search = strpos($haystack, $needle);
        } else {
            return false;
        }
  
        if (is_int($search)) {
            return "Found '$needle' at index $search";
        } else {
            return false;
        }
}

var_dump(string_search('not there', 'Some string.'));