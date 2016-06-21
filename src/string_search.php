<?php

function string_search($needle, $haystack) {
    $pos = strpos($needle, $haystack);

    if ($needle === "") {
        return false;
        echo "'$needle' was not found in '$haystack.'";
    } else {
        echo "'$needle' was found in '$haystack' at '$pos'.";
    }
}

?>