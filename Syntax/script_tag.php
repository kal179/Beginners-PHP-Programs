<!DOCTYPE html>
	<html lang="en-US">
		<head>
			<meta charset="utf-8">
			<title>Example</title>
			<meta name="author", content="Kalpak Take">
		</head>

		<body>
			<p>
			    <h1 style="color:rgb(0, 128, 255); font-family:courier-new; font-size:42px; text-align:left;">Alternatives!</h1>
			</p>

			<script language="php">
				echo "Eureka Script tag Works!<br /><br /><br />";

				$n = 24; // change the value of $n variable to get the multiplication table of that number
				echo "Multiplication Table of ".$n.": <br /><br />";
				for ($i = 0; $i <= 12; $i++) {
					echo $n." x ".$i." = ".$i * $n."<br/>"; 
				}

				/*
					However, using script tag is not the best practice,
					most almost every professional php developer uses < ? php ? > tag
					and it is also accepted by php community!!
				*/
			</script>

		</body>
	
	</html>>
