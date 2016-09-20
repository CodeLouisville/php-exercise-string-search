<?php
function string_search($needle, $haystack){
  $position = strpos($haystack, $needle);
  if($needle==""){
    return false;
  } elseif($position) {
    return "Found '$needle' at index $position";
  }
}
?>
