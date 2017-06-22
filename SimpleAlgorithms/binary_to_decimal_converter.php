<?php 

	/*

		If You know binary this will be easy to undersand:

		Takes string of ones and zeros(we assume that the input is just ones and zeros)
		Splits input string into an array of characters in string
		Iterate through the list/array:
			if char in array is 1 then we add its power of two ** current position of char
			else do nothing
		Finally we return the total

	*/


	function binaryToDecimal($str){
		$splitted = str_split($str);		// Spliting string
		$res = 0;           // Final result
		
		for ($i = 0; $i < count($splitted); ++$i){            // notice i didnot use for each because we need the value of the index of current char for exponention
			if ($splitted[$i] == 1){                 // I've used == operator it checks only value does not care for type
				$res += 2 ** $i;                // 2 to the power of current index
			}
		}
		return $res;                 // Finally, returning the answer
	}

	// Testing the converter               
	echo "Converted Value: ".binaryToDecimal('11111111')."\n";            // Change \n to <br/>

	// Above echo should print 255 to the screen which is 8 bits or 1 byte


?>
