<!DOCTYPE html>
	<html lang="en-US">
		<head>
			<meta charset="utf-8">
			<title>Example</title>
			<meta name="author", content="Kalpak Take">
		</head>

		<body>
			<p>
				<h1 style="color:rgb(255, 0, 64); font-family:courier-new; font-size:45px; text-align:left;">Arrays Methods</h1>
			</p>

			<?php
				
				/*

					Arrays Methods/functions/operations:
					Array methods are methods/functions that
					help make changes in an pre-declared array
					Like:
						adding more values to array;
						popping values out of an array;
						adding values at specific position
						getting the number of values in an array
						getting index of an element in given array
						and so on...
				*/
				// Here we will look at only basics
				$fib_nums = array(1, 1, 2, 3, 10, 5, 8);   // 10 in array is not a fib number

				// First Important method is array_push(array, value)
				// array_push() adds value at the end of the array
				array_push($fib_nums, 13);
				array_push($fib_nums, 21);
				array_push($fib_nums, 34);
				array_push($fib_nums, 56); // 56 is not a fibonacci number

				// Second method will be array_pop(array)
				// pops the last element from given array
				// If array is empty returns null
				$not_fib = array_pop($fib_nums);

				// Third important method is array_sum(array)
				// returns the sum of all elements in an array
				$fib_sum = array_sum($fib_nums);

				// Fourth method is unset(array[index])
				// removes value from local array
				unset($fib_nums[4]);

				// Fifth method is count(array)
				// counts the number of values in an array recursively
				$num_of_values_in_fib_nums = count($fib_nums);

				// Final method in this script is array_merge(array1, array2)
				// Takes two arrays and merges 'em into one
				$more_fibs = array(55, 89, 144);
				$fib = array_merge($fib_nums, $more_fibs);

				// Finally We print all fibonacci naumbers in our array to screen
				echo "<b style='font-size:30px'>Fibonacci Numbers: </b><br/>";
				foreach ($fib as $val) {
					echo "<i style='font-size:25px'>".$val."</i><br/>";
				}

			?>


		</body>
	
	</html>
