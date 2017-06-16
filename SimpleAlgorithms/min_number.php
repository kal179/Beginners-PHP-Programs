<?php 
	
	/*

		Min Integer in an array:

		Loop through array:
		Set min int default to first item in array
		Check if the current item is less than min int variable
		if so then assign it to min int

		Finally, you are remaining with min int in an array

		Notice : We assume that the array only contains real numbers

	*/


	function minN($arr){
		$minNum=$arr[0];           // default value
		foreach ($arr as $item) {
			if ($minNum > $item){      // comparing values
				$minNum = $item;		// assigning if condition is true
			}
		}
		return $minNum;
	}

	// Testing
	
	$testCase=array(98298, 9084, 593489, 0, 3428, 45, 234, 45, 234, 4, 45, 2, 4, 3423, 4, 32, 4534, 234, -0.0003);
	$test=minN($testCase);
	echo "Algorithm Result : ".$test, "\n";        // change \n to <br/> in if using browser
	echo "Expected Result : ".min($testCase), "\n";   

?>
