<?php
  $haystack = "abracadabra";
  $needle = "ab";

  function string_search($needle, $haystack){
    if($needle == ""){
      return false;
    }

    $pos = strpos($haystack, $needle);
    if($pos === false){
      return false;
    }
    else if($pos >= 0){
      return "Found '$needle' at index $pos";
    }else{
      return false;
    }
  }

   var_dump(strpos($haystack,$needle));
   var_dump(string_search($needle, $haystack));

?>
