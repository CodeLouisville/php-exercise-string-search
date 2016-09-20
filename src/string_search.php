<?php

function string_search($haystack, $needle) {
        $search = strpos($haystack, $needle);

        if ($search) {
            return "Found '$needle' at index $search";
        } else {
            return "false";
        }
}