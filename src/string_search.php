<?php
function string_search($needle, $haystack){

  $position =  strpos($haystack, $needle);

  if ($needle == false) {
    return false;
  }elseif ($position >=0){
      return "Found '$needle' at index $position";
  } else {
    return false;
    }
}
?>
