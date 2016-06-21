<?php

$pos = strpos($needle, $haystack);

function string_search($needle, $haystack) {
    if ($needle === "") {
        return false;
        echo "'$needle' was not found in '$haystack.'";
    } elseif ($needle === "" || $needle === 0) {
        echo "'$needle' was found in '$haystack' at '$pos'.";
    }
}

/?>