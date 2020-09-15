<?php

// switch case

// 0 = save as draft , 1 =  updare 2 = published
$status = 0;

if($status == 0){
	print "Article is saved as draft" . "<br>";
}else if($status == 1){
	print "Aticle is updated" ."<br>";
}else if($status == 2){
	print "Article is published" . "<br>";
}

switch ($status) {
	case 0:
		# code...
		print "Article is saved as draft" . "<br>";
		break;
	case 1:
		print "Aticle is updated" ."<br>";
		break;
	case 2:
		print "Article is published" . "<br>";

	default:
		# code...
		break;
}

$userType = "cashier";

switch($userType){
	case "customer":
		print "Showing Customer dashboard";
		break;
	case "cashier":
	case "manager":
	case "admin":
		print "shwoing admin dashboard";
		break;
	case "service":
		print "shwoing service dashaboard";
		break;
	default:
		print "Showing homepage";
		break;
}


// 
$grade = "A";

// A - Excellent , B- Good , C - need hard work

















?>