<?php
session_start();

$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 0;

//Check username and password information
if (($_SESSION['username'] == 'Joe') and ($_SESSION['userpass'] == '12345')) {
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
			<?php
			include 'header.php';
			?>
			<?php
			$myfavmovie = urldecode("Life of Braian");
			echo "<a href='moviesite.php?favmovie=$myfavmovie'>";
			echo "Click here to see information about my favorite movie!";
			echo "</a>";
			echo "<br>";

			echo "Or choose how many movies you would like to see:";
			echo "</a>";
			echo "<br>";
			?>
			<form method="post" action="moviesite.php">
				<p>
					Enter number of movies (up to 10):
					<input type="text" name="num" />
					<br />
					Check here if you want the list sorted alphabetically:
					<input type="checkbox" name="sorted" />
				</p>
				<input type="submit" name="Submit" value="Submit" />
			</form>
		</body>
	</head>
</html>

