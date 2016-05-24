<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

    <?php

    $pos = strpos($haystack, $needle);

    function string_search($needle, $haystack){
        if($needle == ''){
        return false;
        }


    if($pos === false){
        return false;
        } else {
        return "found your" . $needle . " at " . $pos; 
        }
    }

    ?>

</body>
</html>