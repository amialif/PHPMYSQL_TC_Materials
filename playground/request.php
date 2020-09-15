<!DOCTYPE html>
<html>
<head>
	<title>Request</title>
</head>
<body>

	<a href="test_get.php?name=ALIF&weight=62&height=1.6">BMI Calculator</a>

	<br>
	<form>
		Name : <input type="text" name="fname"><br>
		height : <input type="text" name="height"><br>
		Weight : <input type="number" name="weight">
		<br>
		<input type="submit" name="Submit">

	</form>

	<?php
		if(isset($_GET['name'])){
			$name =  $_GET['fname'];	
		}
		
		$height =  get_getData('height');
		$weight = $_GET['weight'];

		$BMI = $weight / ($height * $height);

		Print "<br> BMI is : " . $BMI;

		function get_getData($name){
			return isset($_GET[$name]) ? $_GET[$name] : null;
		}

	?>

</body>
</html>