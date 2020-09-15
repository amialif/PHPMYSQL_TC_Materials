<?php

// seccookie(name,value,expire,path,domain,secure,httponly)
$name ="testCookie";
$value = "visited welcome page again";
$time = time() + (60*60*24*7); // 7 days

setcookie($name,$value, $time);
setcookie("email" ,"amialif@gmail.com", $time);


// delete a cookie
//setcookie("email","",time() - 3600);


// modifying cookies informaton - just set it again
// retreiving cookies informtion - by cookie name with $_COOKIE['']
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
</head>
<body>
	<?php

	$test = isset($_COOKIE["testCookie"]) ? $_COOKIE["testCookie"] : "";

	echo $test;

	echo "<br>";

	if(isset($_COOKIE['email'])){
			echo $_COOKIE['email'];		
	}else{
		echo "Cookie was not set";
	}

echo "<br>";

	echo count($_COOKIE);


	?>
</body>
</html>