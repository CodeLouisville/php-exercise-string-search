<?php
function string_search($needle){
	$haystack='hello';
	if(strstr($needle,$haystack)!=false){
		$p=strpos($needle,$haystack);
		echo "Found $needle at index $p";
	}else{
		return false;
	}

}
$strf=string_search("hihello");
echo $strf;
?>
