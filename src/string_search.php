<?php
function string_search($needle, $haystack){
    //empty = "", 0, 0.0, "0", Null, false, or array()
    if(empty($needle)){
        return false;
    }
    $pos = strpos($haystack, $needle);
    return ($pos === false)?false:"Found '$needle' at index $pos";
}
?> 
