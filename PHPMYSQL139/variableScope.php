<?php
// local
//global keyword
//staic

$x = 5;

print $x;

print "<br>";

function printX(){
	// $x = 10;
	//global $x;
	$x = $GLOBALS["x"];
	print "From Function " . $x;
}

printX();

print "<br>";

print $x;

// static
print "<br>";


function staticf(){
	static $y = 6;
	print $y."<br>";
	$y++;
}

staticf();
staticf();
staticf();

?>