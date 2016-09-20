<?php

function string_search($needle, $haystack) {
        $search = strpos($haystack, $needle);
  
        if (is_int($search)) {
            return "Found '$needle' at index $search";
        } else {
            return false;
        }
}