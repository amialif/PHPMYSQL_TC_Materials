<!DOCTYPE html>
<html>
<head>
	<title>Post Request</title>
</head>
<body>

	<form method="POST" action="test_post.php">
		Name : <input type="text" name="name"><br>
		Age : <input type="text" name="age"><br>
		<input type="submit" name="Submit">
	</form>

	<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$name = $_POST['name'];
			$age = $_REQUEST['age'];

			if(!empty($name)){
				print "Name is " . $name ." Age is " .$age;
			}

	
		}


		$data = "I am     Alif";
		echo $data;
	

	?>

</body>
</html>