<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Session 1</title>
</head>
<body>

	<?php
	
	$_SESSION['favColor'] = "Red";
	$_SESSION['lang'] ="en";

	echo "Sessions are set";

	?>
</body>
</html>