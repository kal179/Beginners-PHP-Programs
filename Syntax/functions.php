<!DOCTYPE html>
	<html lang="en-US">
		<head>
			<meta charset="utf-8">
			<title>Example</title>
			<meta name="author", content="Kalpak Take">
		</head>

		<body>
			<p>
				<h1 style="color:rgb(128, 191, 255); font-family:courier-new; font-size:45px; text-align:left;">Re-useable Pieces!</h1>
			</p>

			<?php
				
				/*
					PHP Functions:
					Functions are basically re-useable pieces of a program 
					They can work with abstract input
					Writing functions reduces a lot of code and task of programmer
					We can store values returned by functions
					Function once written can be used infinite number of times in an program
					
				*/
				


				// Creating a function
				
				function sayHello(){
					echo "<b style='font-size:22px'>Hello, Bro/Sis!</b><br/>";
					return "";
				}
				echo sayHello();
				
				// above function is void takes no input and returns nothing
				// Just prints the string to the screen



				// returning values in functions
				
				function sayHelloToProgrammer(){
					return "Hello, Programmer!";     // we've used return in place of echo
				}
				$message = sayHelloToProgrammer();
				echo "<b style='font-size:22px'>".$message."</b><br/><br/>";

				/* 
					echo vs return:
					echo prints a value like string to the screen/console
					but, 
					by echoing/printing value to the screen we cannot store it to a variable
					In contrast to this,
					return does not print anything to the screen,
					but returns a value which can be stored in a variable and later printed
				*/



				// Passing Arguments
				// Functions take arguments as means of abstract input
				// In following function $name is an argument, there is no specification of value
				// You can give infinite number of arguments to handle

				function sayHelloWithName($name){
					return "Hello, ".$name."! How are you buddy?";
				}

				// When we pass an real input to an argument in function it is called as an parameter
				$message = sayHelloWithName("Steve Jobs");   // enter your name between parenthesis
				echo "<b style='font-size:22px'>".$message."</b><br/><br/>";



				// Default values to arguments
				// Here we have provided default values to arguments just in case user didnt provide function with input

				function create_exclusive_range($start=0, $end, $step=1){        
					$ex_range = array();
					for ($start; $start < $end; $start += $step){
						array_push($ex_range, $start);
					}
					return $ex_range;
				}
				$numbers = create_exclusive_range(0, 21);    // oops we missed passing input to $step argument of function
				
				echo "<b style='font-size:22px'>Just Numbers: </b><br/>";
				foreach ($numbers as $number) {
					echo "<i style='font-size:18px'>{$number}</i><br/>";
				}



				// Variable Functions

				function doSomething($a, $b){
					return $a ** $b;
				}

				$raise_power = 'doSomething';    // we can use this syntax to assign one functions to many different names
				$pow = $raise_power(10, -3);
				echo "<br/><b style='font-size:22px'>10 raised to power of -3 is ".$pow."</b>";   
				// using variable function


			?>


		</body>
	
	</html>
