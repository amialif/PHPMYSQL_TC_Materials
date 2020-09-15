<?php

$age = 20;

if($age >= 21){
	print "You can vote" ."<br>";
}else{
	print "You are not old enough". "<br>";
}



if(true){
	// execute
	print "If condtioin was true";
}

if(true){
	// execute
	print "If condtioin was true again";
}
print "<br>";
// mark = 67;
// 80 - 100 = A , 60 -79 = B , 40 -59 = c, Fail

$mark = 37;
if($mark >= 80){
	print " You got A" ."<br>";
}else if($mark >= 60 && $mark < 80){
	print "You Got B" ."<br>";
}else if($mark >= 40 && $mark < 60 ){
	print "You Got C ". "<br>";
}else{
	print "You are failed";
}


// $ a = 5; $b = 6;
print "<br>";
$x = 5;
$y = 5;

if($x > $y){
	print "X is greater than y";
}else if ($x < $y){
	print "x is less than y";
}else{
	print "both are equal";
}





















?>