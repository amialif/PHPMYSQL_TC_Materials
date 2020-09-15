<?php
// $name = $_GET['name'];
// $age = $_GET['age'];

// print $name . " is " .$age ." years old";


$name = $_GET['name'];
$height = $_GET['height'];
$weight = $_GET['weight'];

$BMI = $weight / ($height * $height);

print $name ." BMI is " . $BMI;

?>