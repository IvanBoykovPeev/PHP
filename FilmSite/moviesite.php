<?php 
session_start();
if ($_SESSION['authuser'] != 1) {
	echo "'Sorry,but you don't have permission to view this page, 
	you loser!";
	
	exit();		
}
 ?>



<!DOCTYPE html>
<html>
	<head>
		<title>My Movie Site - <?php echo ['favmovie']; ?></title>
		<body>
			
			<?php 
			echo "Welcome to our site, ";
			echo $_COOKIE['username'];
			echo "! <br>";
			echo "My favorite movie is ";
			echo $_REQUEST['favmovie'];
			echo "<br>";
			$movierate = 5;
			echo "My movie rating for this movie is: ";
			echo $movierate;
			?>
		</body>
	</head>
</html>