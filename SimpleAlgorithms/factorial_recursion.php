<?php 
 		
		/* 
			Factorial is a very classic and useful algorithm,
			for getting the number of patterns.
			There are many ways to implement it but recursive factorial 
			is very famous.
			Here, I've implemented it using factorial
		*/
		
		function factorial($n){
				static $res = 1;    // assigning to static to save state
				if ($n <= 1){
      			return 0;
    		}
				else{
	    			if ($n > 1){
	        			$res *= $n;
	        			factorial($n - 1);   // Here comes recursion
	    			}

	    			return $res;
				}
  		}
  
  	  echo factorial(5), "\n";    // or u can use <br/> in browser

?>
