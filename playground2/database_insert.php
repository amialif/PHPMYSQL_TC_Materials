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
	
	//2 . perform sql query
	$query = "INSERT INTO class1a(name,gender,ranking) ";
	$query .= "VALUES ('adam','male',2) , ('alif','male',4);";

	$result = mysqli_query($connection, $query);

	print $result;
	if($result){
		// redirect to some other page
		print "Nicely record inserted";
	}else{
		// database failed with die
	}

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