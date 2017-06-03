<?php
        $i = 0;
	      while($i <= 100){
	          echo "Testing for ", $i, ": \n";
	          for ($e = 1; $e <= $i; $e += 1){  // checking if number is divisible by any number untill itself
	              if ($i % $e == 0){  // checking divisibility
	                echo "    \n" , $i, " is divisible by ", $e, "\n\n";
	              }
                else{
                    echo "    it is not divisible by ", $e, "\n";
                }
             }
             echo "\n", "\n";
             $i += 1; // moving forward
	    }
?>
