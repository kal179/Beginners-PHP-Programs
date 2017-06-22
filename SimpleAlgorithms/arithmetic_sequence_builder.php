<?php


	// This is one of most simple algo yet by me in php!
	// The function builds a arithmetic sequence/progression
	// Takes start integer, end integer, and step integer as input for building progression
	// Using for loop we build sequence save it to an array
	// And finally we return the sequence 

	function arithmeticSequenceBuilder($start, $end, $step=1){
		
		$seq = array();
		for ($start; $start <= $end; $start += $step){
			array_push($seq, $start);
		}
		return $seq;
	}
	# Testing
	$res = arithmeticSequenceBuilder(0, 200, 2);
	
	echo "Here is the sequence: \n";
    foreach ($res as $r){
        echo "  ", $r, "\n";
    }

?>
