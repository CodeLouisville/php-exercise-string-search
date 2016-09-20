<?php
function string_search($needle, $haystack){

  $position =  strpos($haystack, $needle);

  if (!$haystack || !$needle || empty($haystack) || empty($needle)) {
    return false;
  }elseif ($position === 0){
      return "Found '$needle' at index $position";
  }elseif (!$position){
         return false;
  }else {
          return "Found '$needle' at index $position";
         }
}

?>
