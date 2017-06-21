<!DOCTYPE html>
	<html lang="en-US">
		<head>
			<meta charset="utf-8">
			<title>Example</title>
			<meta name="author", content="Kalpak Take">
		</head>

		<body>
			<p>
				<h1 style="color:rgb(120, 0, 153); font-family:courier-new; font-size:45px; text-align:left;">Arrays</h1>
			</p>

			<?php
				
				/*

					Arrays:
					Array is a datatype in php,
					it just basically stores multiple values 
					in one one variable. 
				
				*/
				// Example of an array
				$grocery = array('tomatoes', 'brinjal', 'cabbage', 'green peas');     // This is how an array is assigned

				/*
					You can access elements of array using,
					their index.
					Index is just a number like item at index 0 is 'tomatoes'
					item at index 1 is 'brinjal' and so on
					Notice : counting of index starts at 0 and not 1
					so if an array contains 'n' elements then its last element is at
					'n - 1' index 
				*/

				echo '<b>'.$grocery[0].'</b><br/>';
				echo '<b>'.$grocery[1].'</b><br/>';
				echo '<b>'.$grocery[2].'</b><br/>';
				echo '<b>'.$grocery[3].'</b><br/><br/>';

				// Re-assigning the elements in array using index

				$grocery[1] = 'carrots';
				$grocery[2] = 'potatoes';
				echo '<i>Reassigned Values: </i><br/>';
				echo '<b>'.$grocery[1].'</b><br/>';
				echo '<b>'.$grocery[2].'</b><br/><br/>';

				// Multiple types of datatypes can be stored in a single array

				// Example :

				$hybrid = array('string', true, 24587, false, 3.141509);

				foreach ($hybrid as $value) {
					echo '<b>'.$value.'</b></br>';
				}

			?>


		</body>
	
	</html>
