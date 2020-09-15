<!DOCTYPE html>
<html>
<head>
	<title>Request Page</title>
</head>
<body>

	<a href="test_get.php?name=adam&age=18">Test For Get</a>


	<form method="get">
		
		Name : <input type="text" name="name">
		<br>
		Age : <input type="text" name="age"><br>
		Mobile : <input type="text" name="mobile"><br>
		<input type="submit" name="Submit">

	</form>


	<?php

		$name = $_GET['name'];
		$age = $_GET['age'];
		$mobile = $_GET['mobile'];

		echo "$name , $age , $mobile <br/>";


	?>


	<br>

	<a href="test_get.php?name=alif&height=1.6&weight=60">Get BMI</a>

</body>
</html>