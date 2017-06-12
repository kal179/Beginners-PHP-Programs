<?php

	function isPalindrome($s){
		$s = strtolower($s);
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
	
	// remove \n or <br/> according to programming enviornmtemt you are using
	
	echo isPalindrome("noon"), "\n<br/>";    // should be a palindrome
	echo isPalindrome("NoOn"), "\n<br/>";    // should be a palindrome
	echo isPalindrome("racEcar"), "\n<br/>";   // should be a palindrome
	echo  isPalindrome("kalpak"), "\n<br/>";   // is not a palindrome
?>
