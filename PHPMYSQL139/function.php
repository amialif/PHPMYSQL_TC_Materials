<?php

function write(){
	print "Writing.." ."<br>";
}

// default argument
function sayHello($name = "Guest"){
	print "Saying Hello... to " . $name . "<br>";
}

function addTwoNumber($a , $b){
	$result = $a + $b;
	print "Add Result : " . $result ."<br>";
}

write();
sayHello("guest");
sayHello();
sayHello("adam");

addTwoNumber(5,7);

// Returing values from function

function multiply($a, $b){
	return $a * $b;
}


$result = multiply(3,7);

print $result ."<br>";


function addSubMulDiv($a , $b){
	$add = $a + $b;
	$sub = $a - $b;
	$mul = $a * $b;
	$div = $a / $b;
 
	$results = array(
		"add" => $add,
		"sub" => $sub,
		"mul" => $mul,
		"div" => $div
	);
	return $results;
}


$results2 = addSubMulDiv(3,4);

foreach ($results2 as $key => $value) {
	# code...
	print  $key . " result is  = " . $value ."<br>";
}









?>