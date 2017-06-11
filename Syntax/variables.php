<!DOCTYPE html>
	<html lang="en-US">
		<head>
			<meta charset="utf-8">
			<title>Example</title>
			<meta name="author", content="Kalpak Take">
		</head>

		<body>
			<p>
				<h1 style="color:gray; font-family:courier-new; font-size:35px; text-align:center;">PHP can store Variables.</h1>
			</p>

			<?php
				// Variables Store forms of data in memory
				// Variables can change their value 
				// Variables is a fundamental and important part of every language, php is no exception 
				// '=' is not equal to in php it is an assignment operator in php and almost all other languages

				$name = "Kalpak";
				$age = 15;
				$email = "kalpaktake@gmail.com";

				$weird = "var";    // $$weird is same is $var because $weird ' s value is var
				$var = "This is weirdly cool syntax style!";

				echo $$weird, "<br/><br/>";

				echo "Hello, I am ".$name." and I am ".$age." years old! Wanna contact me find me on ".$email."<br />";
				print "<bold style='color:gray;'> This is how you store variables! </bold>";

				$age = 15;
				$age = 16;    // now $age is reassigned to value of 16

			?>

		</body>
	
	</html>
