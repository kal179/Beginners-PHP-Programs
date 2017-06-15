<?php
		
		/*  Idea:
		
		    $arr is array that we have to look into to find closest numbers to $n and 
		    $r is for how much closest we have to find 
		    
		    How Function Works:
		    
		    Iterates over range of $n - $r to $n + $r 
		    checks if that value exists in given array
		    if value matches then adds it to $res as result
		    
		    if $res array is empty then returns None matches found 
		    else returns the array
		    
		*/


		function closestNumbers($arr, $n, $r){
			$res = array();
			$temp = range($n - $r, $n + $r);
			foreach ($temp as $val) {	
				foreach ($arr as $item) {
					if ($item == $val){
						array_push($res, $item);
					}
				}
			}
			
			if (count($res) > 0){
			    return $res;
			}
			else{
			    return "None Matches Found! Try Changing third argument!";
			}
		}


		$test = array(20, 23, 24, 26, 30, 50, 60, 70, 80);    	// change array to your convinence 
		$final = closestNumbers($test, 25, 5);    	// change values accordingly
		echo "The Closest Numbers are : \n\n";    
		// change \n to <br/> in running in browser
		
		
		foreach ($final as $f){
		    echo $f, "\n";   
		}
		// use 'print_r($final);' if want to avoid errors in none matches found in place of foreach loop
?>
