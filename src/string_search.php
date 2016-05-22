<?php

function string_search($needle, $haystack) {
  
  // check for empty needle string
  if ($needle === '') {
    return false;
  }
  
  $result = strpos($haystack, $needle);
  
  if ($result === false) {
    return $result;    
  } else {
    return "Found '$needle' at index $result";
  }
}

?>