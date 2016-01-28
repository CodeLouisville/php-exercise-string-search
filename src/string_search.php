<?php
function string_search($needle, $haystack)
{
    if ($needle === '') {
        return false;
    }
    $pos = strpos($haystack, $needle);
    if ($pos === false) {
        return false;
    } else {
        $retValue = "Found '" . $needle . "' at index " . $pos;
        return $retValue;
    }
}
 ?>
