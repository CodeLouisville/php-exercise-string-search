<?php
function string_search($haystack, $needle){

  $position =  strpos($haystack, $needle);

  if (!$haystack || !$needle) {
    return false;
  } elseif ($position == 0){
    echo "'Found '$needle' at index $position'";
    }  elseif (!$position){
         return false;
      }  else {
          echo "'Found '$needle' at index $position'";
         }
}
string_search("Some string", "string");
 ?>
