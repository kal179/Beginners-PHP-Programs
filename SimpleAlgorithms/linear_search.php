<?php 
	
	// Linear Search ALgorithm:

	/*

		Arguably this is the most easiest/simplest algorithm out there.
		You just loop through the array! 
		if target found 
		return its position(index) as integer
		else return -1
	
	*/


	function findIndexSearch($arr, $n){  // takes array to search and term to find as input

		for ($ind=0; $ind < count($arr); $ind++) {    // looping through
			if ($arr[$ind] == $n){   // if match found returning the index
				return $ind;
			}
		}
		return -1;    // if no match found return -1

		// Remember after encountering return the function stops
	}

	// Testing the algo!

	$testCase = [123, 4565, 34576, 78637856, 38274, 3467, 4.655, 2467.23490, 235, 3.141509, 213878, 12344, -1223, -1233, 90.00000, 0.333333, 2, 54, 324, 76, 345, 6, 2412, 45456745, -134, 3457665, -12.5443, 9, 4, 123, 532,6, 90, 60, -1233.00];    // change values accordingly

	$test=findIndexSearch($testCase, 9);
	echo "Algorithm result : ".$test, "\n";        // As always change \n to <br/> if using browser
	echo "Expected Results : ".array_search(9, $testCase), "\n";   // change the value of first parameter corresponding to $test variable   
?>
