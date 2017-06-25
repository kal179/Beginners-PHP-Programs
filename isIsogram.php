<?php 
	
	/*
	    Isogram is a term for word without any repeating letters:
	    
	    First Function:
	        For a given value and array returns the number of occurences 
	        of that value in the array 
	        
	    Main function:
	        First splits given string into an array of chars
	        Loops through the splitted string 
	        checks the occurences of each each char
	        if they are greater than one then return False and stop function 
	        After looping if function does not appends then we return True
	        
	*/
	
	
	function countSpecific($value, $array){
		$res = 0;
		foreach ($array as $item){
			if ($item == $value){
				$res += 1;
			}
		}
		return $res;
	}


	function isIsogram($string){
		$splitted = str_split($string);
		foreach ($splitted as $char){
			if (countSpecific($char, $splitted) > 1){
				return "False";
			}
		}
		return "True";

	}
	
	// Testing
	$tests = array("answer", "result", "nooon", "apple");   // Add as many tests as you want
	foreach($tests as $test){
	    $tmp = isIsogram($test);
	    echo "Isogram test on word ".$test.": ".$tmp."\n";
	}

?>
