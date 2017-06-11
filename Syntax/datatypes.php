<!DOCTYPE html>
	<html lang="en-US">
		<head>
			<meta charset="utf-8">
			<title>Example</title>
			<meta name="author", content="Kalpak Take">
		</head>

		<body>
			<p>
				<h1 style="color:rgb(83, 128, 172); font-family:courier-new; font-size:45px; text-align:left;">Datatypes avaliable in hypertext preprocessor!</h1>
			</p>

			<?php
				/*
					Php can store many datatypes as follows :
				*/
				$string = "Series of character/s";    // string is just a series of characters between parenthesis
				$boolean = true;     // or false
				$integer = 2420;     //negative positive numbers
				$float = 3.14159;     // decimal point numbers
				$nullType = NULL;      // null is none type obj of php
				$array = array(1, 1, 2, 3, 5, 8, 13, 21, true, "fibonacci");    // array is indexed sequence of values
				$assocArray = array(
									
									"Python" => "Guido Van Rossum",
									"PHP" => "Rasmus Lerdorf",
									"C++" => "Bjarne Stroustroup",
									"Java" => "James Gosling",
									"Ruby" => "Matz",
									"C" => "Dennis Richtie"
									
									);       // also called map or dictionary, stores array in 'key' => 'value' pair
				/*
					It can also store new objects like following
					$object = new Foo();
				*/

			?>

		</body>
	
	</html>
