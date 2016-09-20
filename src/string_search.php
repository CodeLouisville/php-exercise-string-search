<?php

function string_search($needle, $haystack) {
        if ($needle !== "") {
            $search = strpos($haystack, $needle);
        } else {
            return false;
        }
  
        if ($search >= 0) {
            return "Found '$needle' at index $search";
        } else {
            return false;
        }
}