<!DOCTYPE html>
	<html lang="en-US">
		<head>
			<meta charset="utf-8">
			<title>Example</title>
			<meta name="author", content="Kalpak Take">
		</head>

		<body>
			<p>
				<h1 style="color:rgb(255, 200, 00); font-family:courier-new; font-size:45px; text-align:left;">Making Decisions!</h1>
			</p>

			<?php
				
				/*
					Contorl Flow Keywords and Structure:

					'if' checks a conditon if condition is true then it executes code in the if block 

					'elseif' checks condition if 'if' condition was false
					if condition in elseif block is true then code in its block is ececuted

					'else' if both 'if' and 'elseif' block is not executed then else block is executed it dosen't have a condition
				
				*/

				// There can be as many if blocks or as many elseif blocks after if 
				// An if elseif else cycle can be included in side an if or elseif or else block
				// Control flow is an important concept
				// Comparison operators and boolean operators are used to evaluate conditions
				
				$age = 15;   // change this value to your age
				if ($age < 0.1){ // Condition to check 
					echo "You don't exist yet!";   // if condition was true this will get printed
				}
				elseif ($age <= 4 && $age >= 0.1){
					echo "You are a <b>baby!</b>";
				}
				elseif ($age <= 12 && $age > 4){
					echo "You are a <b>kid</b>";
				}
				elseif ($age > 12 && $age <= 19){
					echo "You are a moody <b>teenager!</b>";
				}
				elseif ($age > 19 && $age <= 50){
					echo "You are an <b>adult!</b>";
				}
				elseif ($age > 50 and $age <= 110) {
					echo "You are <b>OLD!</b>";
				}
				else{
					echo "You are <b>immortal!</b>";
				}

				// This will only print i'm a moody teenager the fourth condition if $age = 15; by default

			?>


		</body>
	
	</html>