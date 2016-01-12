<?php
function string_search($needle, $haystack)
{
    if (empty($needle)) {
        return false;
    }

    $position = strpos($haystack, $needle);

    if ($position === false) {
        return false;
    }

    return "Found '$needle' at index $position";

}