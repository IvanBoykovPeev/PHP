<?php
//conect to MySQL
$host = "localhost";
$user = "blade";
$password = "wMHsQwaLKH7s79Yu";
$dbname = "moviesite";
$conn = mysqli_connect($host, $user, $password);

//select database
mysqli_select_db($conn, $dbname);

$query = "SELECT movie_name, movie_director, movie_leadactor FROM movie";

//execute sql querry
$result = mysqli_query($conn, $query);
$num_movies = mysqli_num_rows($result);

$movie_header=<<<EOD
<h2><center>Movie Review Database</center></h2>
<table "width="70%" border="1" cellpadding="2" cellspacing="2" align="center">
 <tr>
 	<th>Movie Title</th>
 	<th>Movie Director</th>
 	<th>Movie Lead Actor</th>
 </tr>
EOD;
$movie_details = '';
while ($row = mysqli_fetch_array($result)) {
	$movie_name = $row['movie_name'];
	$movie_director = $row['movie_director'];
	$movie_leadactor = $row['movie_leadactor'];
	
	$movie_details .=<<<EOD
	<tr>
	<td>$movie_name</td>
	<td>$movie_director</td>
	<td>$movie_leadactor</td>
	</tr>
EOD;
}


$movie_details .=<<<EOD
<tr>
	<td>&nbsp;</td>
	</tr>
	<tr>
	<td>Total :$num_movies Movies</td>
	</tr>
EOD;

$movie_footer = "</table>";

$movie=<<<MOVIE
		$movie_header
		$movie_details
		$movie_footer
MOVIE;

echo "There are $num_movies movies in our database";
echo "$movie";
?>