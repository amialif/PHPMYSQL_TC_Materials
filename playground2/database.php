<?php
// 1. creating database connection
$dbhost = "localhost";
$dbuser ="demo";
$dbpass = "demo1234";
$dbname = "phptest";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno()){
	die("database connection failed: " . mysqli_connect_error() . "(". mysqli_connect_errno() .")");
}

?>
<?php
	
	//2 . perform a database query
	$query = "create table class1a(name varchar(30), gender varchar(30), ranking int(3));";

	mysqli_query($connection , $query);

	echo "Table is created succesfully";

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php

// 5. close connection
mysqli_close($connection);
?>