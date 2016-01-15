<?php

function string_search ($needle, $haystack) {
  
  //Check if $needle is empty, and return false if so.
  if (empty($needle)) {
    
    return false;
    
  } else {
    
    //Use strpos() to search for needle, returning the position if found, and returnig false if not.
    $position = strpos ($haystack, $needle);

    if ($position !== false) {
      return "Found '$needle' at index $position";
    }   
    
    return false;

  }    
}