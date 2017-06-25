<?php 
	
	/*
	
	Pangram is a string conatining every alphabet in english:
	
	First We have to convert given string into lowercase to avoid errors
	To check if a string is pangram or not,
	
	====================================================================

	We have to loop through every letter in english,
	and we have to make sure that the string contains the letter 
	
	if the string does not contain a single letter from alphabet array
	we have to stop the function and return False
	
	Else after checking process is complete and function did not return anything
	that means string is a pangram and we return True

	*/


	function isPangram($string){
		$chars = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "x", "y", "z");
		$string = strtolower($string);
		$splittedString = str_split($string);

		foreach($chars as $char){
			$flag = 0;
			foreach ($splittedString as $str){
				if ($str == $char){
					$flag = 1;
				}
			}
			if ($flag != 1){
				return "False";
			}
		}
		return "True";
	}
	

	// Testing the algorithm
	$tests = array("The quick brown fox jumps over the lazy dog.", "suicide squad is one hell of a movie", "sfgeabcdefgwwfhijklmnopqrssdftuvwxyzqwpocxmu");        // Enter as many tests as you want 
	
	// Just Testing all tests from array $tests
	foreach($tests as $test){
	    $result = isPangram($test);
	    echo "Test String is, \n {$test}\nResult:".$result."\n\n";        
	}



?>
