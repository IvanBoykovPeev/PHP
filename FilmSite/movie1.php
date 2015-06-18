<?php
setcookie('username', 'Joe', time()+60); 
session_start();

$_SESSION['authuser'] = 1;
?>



<!DOCTYPE html>
<html>
	<head>
		<title>Find my Favorite Movie!</title>
		<body>
			<?php
			$myfavmovie = urlencode("Life of Braian");
			echo "<a href='moviesite.php?favmovie=$myfavmovie'>";
			echo "Click here to see information about my favorite movie!";
			echo "</a>";
			?>
		</body>
	</head>
</html>

