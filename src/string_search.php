<?php

function string_search($needle, $haystack) {
    $pos = strpos($needle, $haystack);

    if ($needle === "") {
        return false;
    } else {
        return "Found '" . $needle . "' at index " . $pos;
    }
}

?>