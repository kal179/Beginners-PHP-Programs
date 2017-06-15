<?php 


	/*
		Bubble sort is a famous sorting algorithm:
		
		I basically just swaps elements in an un-sorted array 
		untill they are completed sorted.

		The two elements are compared smaller is swapped to right 

		We assume that the given array is not sorted , 
		other wise there is no point in sorting it!
	*/



	function bubbleSort($arr)	{
		for ($i=0; $i < count($arr); ++$i) {   	// looping till count of array for multiple swaps

			for ($v=0; $v < count($arr) - 1; $v++) {     	// looping for array element index

				if ($arr[$v] > $arr[$v + 1]){   	// if element next to current element is smaller then it gets swapped
					$temp = $arr[$v];     		// temporary storage
					$arr[$v] = $arr[$v + 1];   		// swapping value of smaller element
					$arr[$v + 1] = $temp;    		// swapping value of larger element
				}  							 	// else nothing happens
			}
		}
		return $arr;    // returning arr
	}



	$test = bubbleSort([12, 11, 13, 10, 9, 8, 67, 234, 6, 234, 765, 345, 90, 124234, 23]);  	// array to sort (an unsorted array)
	echo "Sorted Array is better : \n";
	foreach ($test as $val) {
		echo "  $val\n";		// replace \n with <br/> if running it in browser
	}
	
	// It works !!
?>
