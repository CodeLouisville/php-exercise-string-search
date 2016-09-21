<?php
function string_search($needle, $haystack){

  if ($needle==false) {
    return false;
  } else {

    $position = strpos($haystack, $needle);

    if ($position===0 | $position >0){
      return "Found '$needle' at index $position";
    } else {
        return false;
    }
   }
}
?>
