<!DOCTYPE html>
	<html lang="en-US">
		<head>
			<meta charset="utf-8">
			<title>Example</title>
			<meta name="author", content="Kalpak Take">
		</head>

		<body>
			<p>
				<h1 style="color:rgb(210, 45, 45); font-family:courier; font-size:45px; text-align:left;">PHP can store Constants too!</h1>
			</p>

			<?php
				// Constants cannot change their value once declared
				// Constants are similar to variables
				// constants do not start with $
				// Re-assigning a constant will cause an error

				define("pi", 3.14159);   // one way to declare constant
				define("gravitationalConstant", 9.807);

				const name = "Kalpak";  // This way works too

				echo "<br />My Favourite floating point number is ".pi."<br />";
				echo "Earths Gravitional Constant is ".gravitationalConstant." m/s square.<br />";
				echo "And my constant name is ".name."<br />";

				// Constants are global

				/*
					But remember first way to declare constants works only outside class
					Second method works both inside and outside class
				*/



		
			?>

		</body>
	
	</html>
