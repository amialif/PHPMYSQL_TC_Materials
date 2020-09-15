<?php
// indexed array
// associative array


// creating an array
$names = array("alif","adam","alfred", 56, 78, 98);

// how to retrieve the data from array
print_r($names);

print "<br>";

print $names[2];

print "<br>";

// Array funcitons

print "The Number of Item " . count($names) . " inside this array <br>";

$numbers = array(34, 87, 98, 65, 65 ,54);

print "Max Number : " . max($numbers) . "<br>";

print "Min Number : " . min($numbers) . "<br>";
$sorted = sort($numbers);
print_r($sorted);

?>