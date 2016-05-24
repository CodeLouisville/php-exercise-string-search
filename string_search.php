<?php 
function string_search($needle, $haystack){ 
    
    if($needle == ''){ 
       return false; 
    } 

    $pos = strpos($haystack, $needle); 

    if($pos === false){
        return false;
        } else {
        return "found your '$needle' at $pos"; 
        }
    }
} 
?>  