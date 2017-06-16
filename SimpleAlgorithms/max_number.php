<?php 
	
	/*

		Max Integer in an array:

		Loop through array:
		Set max int default to first item in array
		Check if the current item is greater than max int variable
		if so then assign it to max int

		Finally, you are remaining with max int in an array

		Notice : We assume that the array only contains real numbers

	*/


	function maxN($arr){
		$maxNum=$arr[0];           // default value
		foreach ($arr as $item) {
			if ($maxNum < $item){      // comparing values
				$maxNum = $item;		// assigning if condition is true
			}
		}
		return $maxNum;
	}
  
  // Testing the algorithm

	$testCase=array(12, 435 ,34, 324, 34, 32, 5, 1.59034, 234, 435, -23, -2343443.0023, 0.2132434, 34, 213, 4, 123, 564, -1233, 1002, 24);
	$test = maxN($testCase);
	echo "Algorithm Result : ".$test, "\n";        // change \n to <br/> in if using browser
	echo "Expected Result : ".max($testCase), "\n";   

?>
