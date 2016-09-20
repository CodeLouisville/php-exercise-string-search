<?php
function string_search($needle, $haystack){
  if(empty($needle) || !strstr($haystack, $needle)){
    return false;
  } else {
    $position = strpos($haystack, $needle);
    return "Found '$needle' at index $position";
  }
}
?>
