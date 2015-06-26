<?php

//conect to MySQL
$host = "localhost";
$user = "blade";
$password = "wMHsQwaLKH7s79Yu";
$dbname = "moviesite";

$linc = mysqli_connect($host, $user, $password);

mysqli_select_db($linc, $dbname);

//alter "movie" table to onclude running time/cost/takings fields
$add = "ALTER TABLE movie ADD COLUMN ( " . "movie_running_time int NULL, " . "movie_cost int NULL, " . "movie_takings int NULL)";

//$results = mysqli_query($linc, $add) or die(mysqli_error());

//insert new data into "movie" table for each movie
$update = "UPDATE movie SET " . "movie_running_time=102, " . "movie_cost=10, " . "movie_takings=15 " . "WHERE movie_id = 1";

$results = mysqli_query($linc, $update) or die(mysqli_error());

$update = "UPDATE movie SET " . "movie_running_time=90, " . "movie_cost=3, " . "movie_takings=90 " . "WHERE movie_id = 2";

$results = mysqli_query($linc, $update) or die(mysqli_error());

$update = "UPDATE movie SET " . "movie_running_time=134, " . "movie_cost=15, " . "movie_takings=10 " . "WHERE movie_id = 3";

$results = mysqli_query($linc, $update) or die(mysqli_error());
?>