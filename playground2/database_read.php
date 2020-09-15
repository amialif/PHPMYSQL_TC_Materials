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
	$query = "SELECT * FROM  class1a";

	$result = mysqli_query($connection, $query);

	//print $result;
	if(!$result){
		die("Database Query failed");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<ol>
		<?php
		//3 . user retured data
		while($subject = mysqli_fetch_assoc($result)){
		?>
		<li><?php print $subject['name']?> - <?php print $subject['gender']?></li>
		<?php	
		}
		?>
	</ol>
	<?php
		// 4. release the returned data
		mysqli_free_result($result);
	?>
</body>
</html>
<?php

// 5. close connection
mysqli_close($connection);
?>