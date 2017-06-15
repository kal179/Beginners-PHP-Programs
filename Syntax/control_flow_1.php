<!DOCTYPE html>
	<html lang="en-US">
		<head>
			<meta charset="utf-8">
			<title>Example</title>
			<meta name="author", content="Kalpak Take">
		</head>

		<body>
			<p>
				<h1 style="color:rgb(0, 0, 153); font-family:courier-new; font-size:45px; text-align:left;">Logical Control!</h1>
			</p>

			<?php
				
				// Here are examples of all logical operators
				echo "<b>&& example results below : </b><br/>";
				// '&&' operator example
				$percent= 88;
				if ($percent >= 90 && $percent <= 100){
					echo "<i>You got <b>'A'</b> grade</i><br/><br/>";
				}
				elseif ($percent >= 85 && $percent < 90) {
					echo "<i>You got <b>'A2'</b> grade</i><br/><br/>";
				}
				elseif ($percent >= 75 && $percent < 85) {
					echo "<i>You got <b>'B'</b> grade</i><br/><br/>";
				}
				elseif ($percent >= 60 && $percent < 75) {
					echo "<i>You got <b>'C'</b> grade</i><br/><br/>";
				}
				else{
					"<i>Sorry You got <b>'D'</b> grade</i><br/><br/>";
				}

				echo "<b>|| example results below : </b><br/>";

				// '||' operator example
				$age=15;
				if ($age <= 18 || $age >= 60){
					echo "<i>You get a discount of <b>20%</b> is computer history museum!</i><br/><br/>";
				}
				else{
					echo "<i>Sorry! You have to pay full for your ticket!</i><br/><br/>";
				}

				echo "<b>! example results below : </b><br/>";

				// '!' operator example
				$notAlive=false;

				if (! $notAlive){
					echo "<i>You are <b>alive</b> dude!</i>";
				}
				else{
					echo "<i>Oops! You are <b>dead!</b></i>";
				}
			?>


		</body>
	
	</html>