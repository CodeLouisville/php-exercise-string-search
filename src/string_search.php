<?php
function string_search($needle, $haystack){

  if ($needle==false) {
    return false;
  }
  else {
      $position = strpos($haystack, $needle);
      return "Found '$needle' at index $position";
  }
}

?>
