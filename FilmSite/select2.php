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

$select = "SELECT movie_name, movietype_label
FROM movie
LEFT JOIN movietype
ON movie_type = movietype_id
AND movie.movie_year > 1990
ORDER BY movie_type";

//execute sql querry
$results = mysqli_query($conn, $select);

if (mysqli_query($conn, $select)) {
	echo "Select successfully<br>";
} else {
	echo "Error: " . $type . "<br>" . mysqli_error($conn);
}

echo "<table border = \"1\">\n";
while ($row = mysqli_fetch_assoc($results)) {
	echo "<tr>\n";
	foreach ($row as $value) {
		echo "<td>\n";
		echo $value;
		echo "<td>\n";
	}
	echo "<tr>\n";
}
echo "</table>";
mysqli_close($conn);
?>