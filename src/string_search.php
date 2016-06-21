<?php

$pos = strpos($needle, $haystack);

function string_search($needle, $haystack) {
    if ($needle === "") {
        return false;
    } else {
        return "Found '" . $needle . "' at index " . $pos;
    }
}

?>