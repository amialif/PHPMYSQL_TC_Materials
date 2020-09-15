<?php

for($counter =1; $counter <= 10; $counter++){
	print "Line No " .$counter . "<br>";
}

// continue example

for($user = 1; $user<= 5; $user++){
	if($user == 3){
		continue;
	}
	print "sending email to user " . $user . "<br>";
}

for($user = 1; $user<= 5; $user++){
	if($user == 3){
		break;
	}
	print "sending email to user " . $user . "<br>";
}
print "_______________ <br>";

$names = array('adam','alif','lim');

for($i = 0; $i < count($names); $i++){
	print $names[$i] ."<br>";
}
print "_______________ <br>";

foreach ($names as $value) {
	print $value ."<br>";
}

print "_______________ <br>";

$ages = array(
	"Alif" => 30,
	"adam" => 19,
	"lim" => 34
);

print $ages["adam"];
print "_______________ <br>";

foreach ($ages as $name => $age) {
	# code...
	print $name . " is " . $age . " years old" . "<br>";
}


?>