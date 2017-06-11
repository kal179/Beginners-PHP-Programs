<!DOCTYPE html>
	<html lang="en-US">
		<head>
			<meta charset="utf-8">
			<title>Example</title>
			<meta name="author", content="Kalpak Take">
		</head>

		<body>
			<p>
				<h1 style="color:rgb(173, 173, 133); font-family:courier; font-size:45px; text-align:left;">Increment Decrement Ops</h1>
			</p>

			<?php
				
				/*
					There are four increment and decrement operators : 

					'++$a' pre-increment		increments the value of $a and returns it
					'$a++' post-increment		returns the value of $a and increments it 

					'--$b' pre-decrement		similar to pre/post increment except operators decrement value
					'$b--' post-decrement
				
				*/

				$a = 17;
				echo "<h2>$a</h2>";
				echo "<b style='font-size:20px'>pre-increment is this : ".++$a."</b><br/>";
				echo "<b style='font-size:20px'>post-increment is this : ".$a++."</b><br/><br/>";

				$b = 19;
				echo "<h2>$b</h2>";
				echo "<b style='font-size:20px'>pre-decrement is this : ".--$b."</b><br/>";
				echo "<b style='font-size:20px'>post-decrement is this : ".$b--."</b><br/>";

			?>


		</body>
	
	</html>
