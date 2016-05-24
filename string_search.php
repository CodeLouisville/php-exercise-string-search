<? php 

$haystack = "derp"
$needle = "d"
$pos = strpos($haystack, $needle); 

function string_search($needle, $haystack){ 
    
    if($needle === ""){ 
       return false; 
    }

    if($pos === false){
        return false;
        } else {
        return "Found '$needle' at position $pos"; 
        }
    }
} 

?>  
