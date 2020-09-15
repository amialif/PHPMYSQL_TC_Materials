<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	//print_r($_SESSION);

	// modify session
	//$_SESSION['favColor'] = "Yellow";

	print $_SESSION['favColor']."<br>";

	// unset first 
		session_unset();

	// destroy
		session_destroy();
	?>

</body>
</html>