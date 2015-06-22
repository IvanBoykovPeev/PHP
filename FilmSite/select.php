<?php
//conect to MySQL
$host = "localhost";
$user = "blade";
$password = "wMHsQwaLKH7s79Yu";
$dbname = "moviesite";
$conn = mysqli_connect($host, $user, $password);
//check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
} else {
	echo "Successsful connect<br>";
}
//select database
mysqli_select_db($conn, $dbname);

$select = "SELECT movie_name, movie_type FROM movie
				WHERE movie_year > 1990
				ORDER BY movie_type";
$results = mysqli_query($conn, $select);
while ($row = mysqli_fetch_assoc($results)) {
	foreach ($row as $vall) {
		echo $vall;
		echo " ";
	}
	echo "<br>";
}

mysqli_close($conn);
?>