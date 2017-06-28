<!DOCTYPE html>
	<html lang="en-US">
		<head>
			<meta charset="utf-8">
			<title>Example</title>
			<meta name="author", content="Kalpak Take">
		</head>

		<body>
			<p>
				<h1 style="color:rgb(153, 204, 0); font-family:courier-new; font-size:45px; text-align:left;">While True...</h1>
			</p>

			<?php
				
				/*

					While Loop:
					To perform a task repeatedly without certain point 
					for end we use while loops 

					Structure:

					while(condition){
						program....
					}

					While loop takes condition if
					the condition is true the loop will iterate forever without stopping
					unless we run out of memory on the computer
					Once the condition is false the loop breaks or stops

					While loops are used for iterating without certain point of ending
					This is contrary to for loops they have fixed point of ending!
				
				*/
				
				// Creating basic while loop!
				echo "<b style='font-size:27px'>EVENS AND ODDS!</b><br/><br/>";
				$i = 0;
				while ($i <= 20){
					if ($i % 2 == 0){
						echo "<i style='font-size:21px'>Even Number {$i}</i><br/>";
					}
					else {
						echo "<i style='font-size:21px'>Odd Number {$i}</i><br/>";
					}
					$i++;
				}
				echo "<br/><br/>";

				// Infinite loop 'A never ending loop' or untill memory if full
				// Un-comment only if you want to try it!
				/*

					while (true){
						echo "Forever<br/>";
					}

				*/


				// Break and Continue statements
				// Sometimes giving conditions in those curly braces is not the right practise to do
				// Instead you can use break and continue statements
				// break statement
				// when a loop encounters a break it stops
				// break statement is really useful when u dont want your computer to run out of ram
				// continue statement

				$favourite_celebs = array( "Scarlett Johansson", "Chris Evans", "Robert Downey Jr", "Johhny Depp", "Kristen Stewart", "Jackie Chan");
				$i = 0;
				$len = count($favourite_celebs);

				echo "<b style='font-size:27px'> My Favourite Celebs are -></b><br/><br/>";
				while (true){
					if ($i < $len){
						echo "<i i style='font-size:21px'>".$favourite_celebs[$i]."</i><br/>and <br/>";
						$i++;
						continue;
					}
					else{
						echo "No one else!<br/><b style='font-size:27px'>That's all!</b><br/>";
						break;
					}	
				}

				// While loops are easy and useful
			?>


		</body>
	
	</html>
