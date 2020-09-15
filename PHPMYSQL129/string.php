<?php

$name = "Adam";
$anotherName = 'Alif';

print $name;

print "<br>";

print $anotherName;

// Concetanation .

print "<br>" . "Welcome " . $name . " Good Morning";
echo "<br>" . "Welcome " . $name . " Good Morning";


// String functions

$email = "Kevin@gmail.com";

print (strtoupper($email));

$domain = strstr($email, '@');
print "<br>";
$a = strpos($email, '@');
print $a ."<br>";
print $domain;
print "<br>";
$text = "ablakjfd akfj\0 - NULL \t - tab \n - new line \x0B - vertical tab \r - sad";

print trim($text);

print strlen($email);

$simplebool = true;
$isFalse = false;
print "<br>";


var_dump($email);


?>