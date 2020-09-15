<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
	<style type="text/css">
		.error{
			color:red;
		}
	</style>
</head>
<body>
	<?php
		$nameErr = $emailErr = $genderErr = $webErr = "";
			$name = $email = $gender = $web = $comment= "";

		if($_SERVER["REQUEST_METHOD"] == "POST"){

			// create variables and assign empty value


			if(!empty($_POST['name'])){
				$name = $_POST['name'];
			}else{
				$nameErr = "Name is Required";
			}

			if(!empty($_POST['email'])){
				$email = $_POST['email'];
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					$emailErr = "Invalid Email Format";
				}	
			}else{
				$emailErr = "Email is Required";
			}

			if(!empty($_POST['website'])){
				$web = test_input($_POST["website"]);	
			}else{

			}

			if(!empty($_POST['gender'])){
				$gender = $_POST['gender'];
			}else{
				$genderErr = "Gender is Required";
			}

			if(!empty($_POST['comment'])){
				$comment = $_POST['comment'];
			}
		}



	?>

	<h2>Form Validation Example</h2>
		<span class="error"> * Required Fields</span>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
		
		Name :<input type="text" name="name" value="<?php echo $name; ?>">
		<span class="error">*<?php echo $nameErr?></span>
		<br>
		Email : <input type="text" name="email">
		<span class="error">* <?php echo $emailErr?></span>
		<br>
		Website : <input type="text" name="website">
		<br>
		Comment : <textarea name="comment" rows="5" cols="20"></textarea>
		<br>
		Gender :
		
		<input type="radio" name="gender" value="Female">Female
		<input type="radio" name="gender" value="Male"> Male
		<input type="radio" name="gender" value="Others"> Others
<span class="error">* <?php echo $genderErr?> </span>
		<br>
		<input type="submit" name="Submit">

	</form>

	<h2>Your Input:</h2>
	<?php

		if($_SERVER["REQUEST_METHOD"] == "POST"){

			echo "$name <br> $email <br> $web <br> $comment <br> $gender";

			$errors = array();
			// $errors['username'] = "Username can't be blank";
			// $errors["email"] = "email was empty";

			form_errors($errors);

		}

		function test_input($value){
			$data = trim($value);
			$data = stripslashes($value);
			$data = htmlspecialchars($value);

			return $data;
		}



		function form_errors($errors = array()){
			if(!empty($errors)){
				print "Please fix the following" . "<br>";
				print "<ol>";
				foreach ($errors as $key => $value){
					print "<li>". $value. "</li>";
				}
				print "</ol>";
			}
			
		}


	?>

</body>
</html>