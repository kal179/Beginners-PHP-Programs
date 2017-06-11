<!DOCTYPE html>
	<html lang="en-US">
		<head>
			<meta charset="utf-8">
			<title>Example</title>
			<meta name="author", content="Kalpak Take">
		</head>

		<body>
			<p>
				<h1 style="color:rgb(173, 51, 255); font-family:courier; font-size:45px; text-align:left;">Global vs Local</h1>
			</p>

			<?php
				
				// Variable Scope
				// Global and Local
				$variable = 24012;

				function foo(){
					// return $variable; // this will cause error because the variable is local and gloablly avaliable in program
					global $variable;  
					$variable += 240;// making it global for universal access around the program
					return "Global addition : ".$variable;     // This is another method
				}

				echo foo(), "<br/>";
			?>


		</body>
	
	</html>
