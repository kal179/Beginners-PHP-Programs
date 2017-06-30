<!DOCTYPE html>
	<html lang="en-US">
		<head>
			<meta charset="utf-8">
			<title>Welcome Buddy!</title>
		</head>

		<body>
			<h1 style="font-size: 50px; font-family: verdana; text-align: center; color: rgb(255, 102, 102)">
				<b >Welcome! </b>	<?php echo "<b style='font-size: 50px; font-family: verdana; text-align: center; color: rgb(255, 102, 102)'>".$_POST["name"]."</b>";?>
			</h1><br/><br/><br/>

			<h2><i style="font-size: 25px; font-family: courier new; text-align: left; color: rgb(102, 102, 102)">You entered with email address: </i>
			<?php echo "<i style='font-size: 25px; font-family: courier new; text-align: left; color: rgb(102, 102, 102)'>".$_POST["email"]."</i>"; ?>
			</h2>
		</body>

	</html>
