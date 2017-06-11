<!DOCTYPE html>
	<html lang="en-US">
		<head>
			<meta charset="utf-8">
			<title>Example</title>
			<meta name="author", content="Kalpak Take">
		</head>

		<body>
			<p>
				<h1 style="color:rgb(54, 125, 54); font-family:courier-new; font-size:45px; text-align:left;">String Opeartors</h1>
			</p>

			<?php
				
				/*
					String Operations : 

					'.' concatenation operator

					'{}' to format string
				
				*/

				$cap = "Captain";
				$america = "America";

				$tony = "Iron man";

				$steve = $cap . " " . $america;  // String Concatenation

				echo "<h2>"."{$steve} , $tony , "."thor"." are all marvel characters!"."</h2>";

			?>


		</body>
	
	</html>
