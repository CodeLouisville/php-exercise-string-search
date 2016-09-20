<?php
function string_search($needle, $haystack){
  if(empty($needle)){
    return false;
  } else {
    $position = strpos($haystack, $needle);

    if($position || $needle === '') {
        return false;
    } else {
        return "Found '$needle' at index $position";
  }
  if ($position !== false) {
    return "Found '$needle' at index $position";
  }
  return false;
}
?>
