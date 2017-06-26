<?php 
    
    // Problem source: http://www.geeksforgeeks.org/find-pairs-b-array-b-k/

    // We loop through given array
    // For each value we chech every element from array 
    // If remainder matches add those numbers to the result array
    // Simple...
    
    
	function checkRemainder($arr, $rem){
		$res = array();
		foreach ($arr as $element) {
			$temp = $element;
			foreach ($arr as $item) {
				if ($element % $item == $rem){
					array_push($res, array($element, $item));
				}
			}
		}
		return $res;
	}
    
    
    
    // Testing
	$test = array(2, 3, 5, 4, 7);           // change values of test and test case accordingly
	$testCase = 3;
	$result = checkRemainder($test, $testCase);
	
	foreach ($result as $arr) {
		echo "{$arr[0]} % {$arr[1]} = ", $testCase, "\n";
	}
	
	echo "\nRemainder occurs : ".count($result)." times.\n";


?>
