<?php
// 1. Creating the connection
$dbhost = "localhost";
$dbuser = "demo";
$dbpass ="demo1234";
$dbname = "phptest";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);



// 2. perform the query

$query = "SELECT * FROM items";



?>





<?php
//5. close the connection
mysqli_close($connection);
?>