<?php 
	

	/*

		Simple String Reversing algorithm: 

		Takes in a string as input (we assume input is a string)
		Reverses it!
		Returns it!

	*/


	function stringReverse($str='LLUN')  {
		$str = strtolower($str);      // making string lowercase
		$reversed = "";        // to return variable
		for ($index=strlen($str) - 1; $index >= 0; $index--) {    // looping reverse for string index
			$reversed .= $str[$index];       // concatenating the character to $reversed
		}
		return $reversed;       // returning $reversed
	}

	$test = stringReverse("rossecorperP txetrepyH ");     // testcase for our function
	echo "Reversed string :\n$test\n";    // replace \n with <br/>


?>
