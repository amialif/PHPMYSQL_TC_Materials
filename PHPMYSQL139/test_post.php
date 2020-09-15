<?php
// $name = $_GET['name'];
// $age = $_GET['age'];

// print $name . " is " .$age ." years old";


$name = $_POST['name'];
$height = $_POST['height'];
$weight = $_POST['weight'];

$BMI = $weight / ($height * $height);

print $name ." BMI is " . $BMI;

?>