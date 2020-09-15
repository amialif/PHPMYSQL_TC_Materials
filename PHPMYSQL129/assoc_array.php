<?php

$ages = array(
	"alif" => 30,
	"adam" => 18,
	"kevin" => 20
);

print $ages['adam'] . "<br>";
print $ages['alif'] . "<br>";
print $ages['kevin'] . "<br>";

print_r($ages);

// foreach ($ages as $key => $value) {
// 	# code...
// 	print "<br>". $key . " is " . $value . " years old. <br>";
// }

$another = array(
	0 => "adam",
	1 => "alif",
	2 =>  "Lim"
	);

print_r($another);

var_dump($another);

$val = null;

print "<br>";

print $val;

print(is_null($val));


?>