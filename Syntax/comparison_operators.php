<!DOCTYPE html>
	<html lang="en-US">
		<head>
			<meta charset="utf-8">
			<title>Example</title>
			<meta name="author", content="Kalpak Take">
		</head>

		<body>
			<p>
				<h1 style="color:rgb(255, 200, 00); font-family:courier-new; font-size:45px; text-align:left;">Comparators!</h1>
			</p>

			<?php
				
				/*
					Comaparison Operators : 

					'==' checks if values are equal or not 
					'===' checks if values are equal and of same type
					'!=' checks un-equality
					'!==' checks un-equality and datatype
					'<' less than 
					'>' greater than
					'<=' less than equal to
					'>=' greater than equal to
				
				*/

				// All above operators are used for making comparison
				// Thats what computers are best at
				// All comparisons return either true or false or error

				$usrName = "Kay";
				echo "This is true : ", "5" == 5, "<br/>";
				echo "Works for strings , this is true : ", $usrName == "Kay", "<br/>";
				echo "This is false because types are different : ", "5" === 2 + 3, "<br/>";   // works for strings
				echo "This is false : ", "125" != 25 * 5, "<br/>";    // this also works for strings
				echo "This is true : ", "625" !== 25 * 5, "<br/>";  // this too
				echo "This is true : ", 12 < 12 * 12, "<br/>";
				echo "This is false : ", 4 ** 3 > 3 ** 4, "<br/>";
				echo "This is true : ", 120 >= 2 * 3 * 4 * 5, "<br/>";
				echo "This is false : ", 720 <= 2 * 4 * 5, "<br/>"; 

				// Notice 1 will be true an nothing will be false


			?>


		</body>
	
	</html>
