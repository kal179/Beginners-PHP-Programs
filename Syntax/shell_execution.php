<!DOCTYPE html>
	<html lang="en-US">
		<head>
			<meta charset="utf-8">
			<title>Example</title>
			<meta name="author", content="Kalpak Take">
		</head>

		<body>
			<p>
				<h1 style="color:rgb(98, 71, 107); font-family:courier-new; font-size:45px; text-align:left;">Execution Operator</h1>
			</p>

			<?php
				
				/*
					Shell Execution Operator : 

					' `` ' backticks is used to represent the command
					that is to be executed in shell

					shell_exec() function is also used to execute commands in shell
				
				*/

				$command = `ls ~/`;
				echo "<pre>{$command}</pre>";

				// nothing will be viewed in browser 'cause it was executed in shell 
				// if u know file i/o then write results to file and then view it in browser
			?>


		</body>
	
	</html>
