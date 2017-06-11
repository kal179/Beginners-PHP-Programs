<!DOCTYPE html>
	<html lang="en-US">
		<head>
			<meta charset="utf-8">
			<title>Example</title>
			<meta name="author", content="Kalpak Take">
		</head>

		<body>
			<p>
				<h1 style="color:rgb(173, 51, 255); font-family:courier-new; font-size:45px; text-align:left;">Assignment Ops</h1>
			</p>

			<?php
				
				// Assignment Operators
				// '=' assignment operator used to declare variables and constants
				// '+=' for updating variables value by adding itself plus new assigned number
				// '-=' for updating variables value by subtracting from new assigned number
				// '*=' for updating variables value by  multiplying itself into new assigned number
				// '/=' for updating variables value by dividing itself by new assigned number
				// '%=' for updating variables value by getting remainder by dividing value of variable by new assigned number
				// '**=' for updating variables value by exponentiation of value into new assigned number

				$n = 2020;

				$n += 4;			// same as $n = $n + 4;
				echo "<strong style='font-size:28px'>".$n."</strong>", "<br/>";  
				$n -= 2000;  		// same as $n = $n - 2000;
				echo "<strong style='font-size:28px'>".$n."</strong>", "<br/>";
				$n *= 100;   		// same as $n = $n * 100;
				echo "<strong style='font-size:28px'>".$n."</strong>", "<br/>";
				$n /= 20; 		// same as $n = $n / 20; 
				echo "<strong style='font-size:28px'>".$n."</strong>", "<br/>";
				$n %= 9;		// same as $n = $n % 9;
				echo "<strong style='font-size:28px'>".$n."</strong>", "<br/>";
				$n **= 3;		// same as $n = $n ** 3;
				echo "<strong style='font-size:28px'>".$n."</strong>", "<br/><br/>";  
				// value is probably 27

				$new = &$n;  // now the $new is reference to $n variable
				echo "<strong style='font-size:28px'>".$new."</strong>", "<br/>"; // this should print 27
				// similar to arithmetic operators there is string concatenation operator
				// '.='
				// example is below

				$username = "kalpaktake";
				$username .= "@gmail.com";
				echo "<h2> my email address is : ".$username."</h2>"; 

			?>


		</body>
	
	</html>
