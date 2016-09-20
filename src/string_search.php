<?php

function string_search($needle, $haystack) {
        if ($needle === "") {
            return false;
        } else {
            $search = strpos($haystack, $needle);
        }
  
        if (is_int($search)) {
            return "Found '$needle' at index $search";
        } else {
            return false;
        }
}
