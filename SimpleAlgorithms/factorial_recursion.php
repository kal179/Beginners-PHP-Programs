<?php 
 		
	/* 
		Factorial is a very classic and useful algorithm,
		for getting the number of patterns.
		There are many ways to implement it but recursive factorial 
		is very famous.
		Here, I've implemented it using recursion
	*/
	function factorial($n){
		static $res = 1;    // static saves the state of varibale even after function completes
		if ($n <= 1){     // if value is not greater than 1 we return 0
      		return 0;
    	}
		else{    
	    	if ($n > 1){   // unless $n is greater than 1 we keep on counting factorial but each time with $n - 1 value
	        	$res *= $n;
	        	factorial($n - 1);
	    	}

	    	return $res;  // finally we return it to user
	    	
		}
  	}
  
  	// remove \n or <br/> according to programming enviornmtemt you are using
  	echo factorial(5), "\n<br/>";
  	echo factorial(12), "\n<br/>";  // should be a big value
  	echo factorial(4), "\n<br/>";  

?>
