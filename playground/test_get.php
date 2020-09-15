<?php
	
	$name = $_GET['name'];
	$weight = $_GET['weight'];
	$height = $_GET['height'];

	$BMI = $weight / ($height * $height);

	print "Name is " . $name . "BMI is ". $BMI;

?>