
<!DOCTYPE html>
	<html lang="en-US">
		<head>
			<meta charset="utf-8">
			<title>Example</title>
			<meta name="author", content="Kalpak Take">
		</head>

		<body>
			<p>
				<h1>Outputing Strings in PHP.</h1>
			</p>

			<?php
	
				echo "Hello, World <br />";
				print "<strong> This is strong text! </strong><br/>"; // It is said that print is slower than echo method
				echo sprintf("Hello, %s, You are %d years old! isn't it!", "Kalpak", 15), "<br/>"; 
				/*
				sprintf is used for string formatting %s for string %d for integer %f for float 
				and more options are avaliable for formatting!!
				*/		
				print "This"." is"." called"." concatenation!";    // . is concatenation operator 
				// In other languages concatenation operator is normally + but in php it is .
				

			?>


		</body>
	
	</html>
