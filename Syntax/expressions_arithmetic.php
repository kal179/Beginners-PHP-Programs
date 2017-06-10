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

				echo "2420 + 1240 = ", 2420 + 1240;
				echo "3.14159 - 0.14159 = ", 3.14159 - 0.14159;
				echo "48 * 9 = ", 48 * 9;
				echo "13140585 / 3 = ", 13140585 / 3;
				echo "17 % 2 = ", 17 % 2;
				echo "120 ** 2 = ", 120 ** 2;

				// Expressions and Operator Precendence
				// You can execute mathematical expressions in php
				// Like : (12 * (34 + 144) * (65 / 5) - (-6)) / 9; or (((((-2 + (-2))))));
				// Operator Precendence means order of operations 
				// Like 12 * 12 - 10 will be 134 but 12 * (12 - 10) will be 24
				// Therefore, Brackets are important for operator precendence

				echo "echo ((12 - 144) / (17 ** 2) + (9 * 3 + (30 - 3) + (7 * 3 - 1)) * 0) * 0 = ", echo ((12 - 144) / (17 ** 2) + (9 * 3 + (30 - 3) + (7 * 3 - 1)) * 0) * 0;
		
			?>

		</body>
	
	</html>>
