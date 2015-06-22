<?php
//connect to MySQL; note we've usedour parameters- you should use
//you own for hostname, user, and pasword
$servername = "localhost";
$username = "blade";
$password = "wMHsQwaLKH7s79Yu";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
//create the main database if it doesn't already exist
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";

//create the main database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS moviesite";
$create = mysqli_query($conn, $sql) or die(mysql_error());
if (mysqli_query($conn, $sql)) {
	echo "Database created successfully<br>";
} else {
	echo "Error creating database: " . mysqli_error($conn);
}
//make sure our recently created database is the active one
mysqli_select_db($conn, "moviesite");
//create "movie" table
$movie = "CREATE TABLE movie (
movie_id int(11) NOT NULL auto_increment,
movie_name varchar(255) NOT NULL,
movie_type tinyint(2) NOT NULL default 0,
movie_year int(4) NOT NULL default 0,
movie_leadactor int(11) NOT NULL default 0,
movie_director int(11) NOT NULL default 0,
PRIMARY KEY (movie_id),
KEY movie_type (movie_type,movie_year)
)";
$results = mysqli_query($conn, $movie) or die(mysql_error($conn));
//create "movietype" table

$movietype = "CREATE TABLE movietype (
movietype_id int(11) NOT NULL auto_increment,
movietype_label varchar(100) NOT NULL,
PRIMARY KEY (movietype_id)
)";
$results = mysqli_query($conn, $movietype) or die(mysqli_error($conn));
//create "people" table
$people = "CREATE TABLE people (
people_id int(11) NOT NULL auto_increment,
people_fullname varchar(255) NOT NULL,
people_isactor tinyint(1) NOT NULL default 0,
people_isdirector tinyint(1) NOT NULL default 0,
PRIMARY KEY (people_id)
)";
$results = mysqli_query($conn, $people) or die(mysqli_error($conn));
echo "Movie Database successfully created!";

mysqli_close($conn);
?>