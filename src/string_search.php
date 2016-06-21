<?php

$pos = strpos($needle, $haystack);

function string_search($needle, $haystack) {
    if ($needle === "") {
        return false;
        echo "'$needle' was not found in '$haystack.'";
    } else {
        echo "'$needle' was found in '$haystack' at '$pos'.";
    }
}

/?>