<?php
//conect to MySQL
$host = "localhost";
$user = "blade";
$password = "wMHsQwaLKH7s79Yu";
$dbname = "moviesite";
$conn = mysqli_connect($host, $user, $password);

//select database
mysqli_select_db($conn, $dbname);

$query = "SELECT movie_id, movie_name, movie_director, movie_leadactor FROM movie";

//execute sql querry
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$num_movies = mysqli_num_rows($result);
$movie_header = <<<EOD
<h2><center>Movie Review Database</center></h2>
<table "width="70%" border="1" cellpadding="2" cellspacing="2" align="center">
 <tr>
 	<th>Movie Title</th>
 	<th>Movie Director</th>
 	<th>Movie Lead Actor</th>
 </tr>
EOD;

function get_director() {
	global $movie_director;
	global $director;
	$conn = mysqli_connect("localhost", "blade", "wMHsQwaLKH7s79Yu");
	mysqli_select_db($conn, "moviesite");
	$querry_d = "SELECT people_fullname FROM people WHERE people_id = '$movie_director'";
	$results_d = mysqli_query($conn, $querry_d);

	$row_d = mysqli_fetch_assoc($results_d);
	extract($row_d);
	$director = $people_fullname;
}

function get_leadactor() {
	global $movie_director;
	global $movie_leadactor;
	global $leadactor;
	$conn = mysqli_connect("localhost", "blade", "wMHsQwaLKH7s79Yu");
	mysqli_select_db($conn, "moviesite");
	$querry_a = "SELECT people_fullname FROM people WHERE people_id = '$movie_leadactor'";
	$results_a = mysqli_query($conn, $querry_a);
	$row_a = mysqli_fetch_assoc($results_a);
	extract($row_a);
	$leadactor = $people_fullname;
}

$movie_details = ' ';
while ($row = mysqli_fetch_array($result)) {
	$movie_id = $row['movie_id'];
	$movie_name = $row['movie_name'];
	$movie_director = $row['movie_director'];
	$movie_leadactor = $row['movie_leadactor'];
	//get director's name from people table
	get_director();
	//get lead actor's name from people table
	get_leadactor();
	$movie_details .= <<<EOD
	<tr>
	<td><a href="movie_details.php?movie_id=$movie_id"
		<title="Find out more about $movie_name">$movie_name</td>
	<td>$director</td>
	<td>$leadactor</td>
	</tr>
EOD;
}

$movie_details .= <<<EOD
	<tr>
	<td>Total :$num_movies Movies</td>
	</tr>
EOD;

$movie_footer = "</table>";

$movie = <<<MOVIE
		$movie_header
		$movie_details
		$movie_footer
MOVIE;

echo "There are $num_movies movies in our database";
echo "$movie";

?>