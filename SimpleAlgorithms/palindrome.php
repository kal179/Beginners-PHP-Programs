<?php
	
	function isPalindrome($s){
		$arr = array_reverse(str_split($s));
		$toCompare = "";
		for ($i = 0; $i < count($arr); ++$i){
	        $toCompare .= $arr[$i];
	    }
	    if ($s == $toCompare){
	        return "String is a palindrome!";
	    }
		return "Sorry! it isn't a palindrome!";
	}
	
	echo isPalindrome("noon"), "\n<br/>";

	
?>