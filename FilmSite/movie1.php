<?php 
session_start();

$_SESSION['username'] = $_GET['user'];
$_SESSION['userpass'] = $_GET['pass'];
$_GET['authuser'] = 0;

//Check username and password information
if (($_SESSION['username'] == 'Joe') and
    ($_SESSION['userpass'] == '12345')) {
	$_SESSION['authuser'] = 1;
} else {
	echo "Sorry, but you don't have permission to view this
	page,you loser!";
    exit();
}
?>

<html>
	<head>
		<title>Find my Favorite Movie!</title>
		<body>
			<h1>Hello</h1>
			 <?php
			 $myfavmovie = urldecode("Life of Braian");
			 echo "<a href='moviesite.php?favmovie'>";
			 echo "Click here to see information about my favorite movie!";
			 echo "</a>";
			 echo "<br>";
			 echo "<a href='moviesite.php?movienum=5'>";
			 echo "Click here to see my top 5 movies.";
			 echo "</a>";
			 echo "<br>";
			 echo "<a href='moviesite.php?movienum=10'>";
			 echo "Click here to see my top 10 movies.";
			 echo "</a>";
			 ?>
		</body>
	</head>
</html>

