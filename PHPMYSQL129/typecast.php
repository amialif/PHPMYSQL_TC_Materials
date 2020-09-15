<?php

$salary = "23000";

print gettype($salary);


print "<br>";

// settype($salary , "integer");

print gettype($salary);


print "<br>";
$bonus = 2000;

$total = (integer) $salary + $bonus;

print "<br>". $total;



?>