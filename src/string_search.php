<?php
function string_search($haystack, $needle){

  $position =  strpos($haystack, $needle);

  if ($position == 0){
    echo "Found '$needle' at position $position";
  }  elseif (!$position){
    return false;
     }  else {
          echo "Found '$needle' at position $position";
      }
}



 ?>
