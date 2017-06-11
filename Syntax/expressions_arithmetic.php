<!DOCTYPE html>
	<html lang="en-US">
		<head>
			<meta charset="utf-8">
			<title>Example</title>
			<meta name="author", content="Kalpak Take">
		</head>

		<body>
			<p>
				<h1 style="color:rgb(204, 255, 51); font-family:courier; font-size:45px; text-align:left;">Math and Expressions!</h1>
			</p>

			<?php
				
				// There are 6 Arithmetic Operators in PHP
				// 1 : Addition
				// 2 : Subtraction
				// 3 : Multiplication
				// 4 : Division
				// 5 : Modulus
				// 6 : Exponentiation

				echo "2420  +  1240  =  ", 2420 + 1240, "<br/>";
				echo "3.14159  -  0.14159  =  ", 3.14159 - 0.14159, "<br/>";
				echo "48  *  9  =  ", 48 * 9, "<br/>";
				echo "13140585  /  3  =  ", 13140585 / 3, "<br/>";
				echo "17  %  2  =  ", 17 % 2, "<br/>";
				echo "120  **  2  =  ", 120 ** 2, "<br/>";

				// Expressions and Operator Precendence
				// You can execute mathematical expressions in php
				// Like : (12 * (34 + 144) * (65 / 5) - (-6)) / 9; or (((((-2 + (-2))))));
				// Operator Precendence means order of operations 
				// Like 12 * 12 - 10 will be 134 but 12 * (12 - 10) will be 24
				// Therefore, Brackets are important for operator precendence

				echo "(12 ** 12) * 2 / (256 - 256 + (4 / 2)) = ", (12 ** 12) * 2 / (256 - 256 + (4 / 2)) * 0;
		
			?>

		</body>
	
	</html>>
