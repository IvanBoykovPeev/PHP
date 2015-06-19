<?php 
session_start();

//check to see if user has logged in with a valid password
if ($_SESSION['authuser'] != 1) {
	echo "Sorry,but you don't have permission to view this page, 
	you loser!";
	exit();		
}
 ?>
 
<html>
	<head>
		<title>My Movie Site - <?php echo ['favmovie']; ?></title>
		<body>
			<?php include 'header.php'; ?>
			<?php
		    function listmovie_1()
			{
				echo "1. Life of Braian<br>";
				echo "2. Stripes<br>";
				echo "3. Office Space<br>";
				echo "4. The Holly Grail<br>";
				echo "5. Matrix<br>";
			}
			
			function listmovie_2()
			{
				echo "6. Terminator<br>";
				echo "7. Star Wars<br>";
				echo "8. Close Encounters of the Third Kind<br>";
				echo "9. Sixteen Candies<br>";
				echo "10. Caddyshack<br>";
			}
			if (isset($_REQUEST['favmovie'])) {
			echo "Welcome to our site, ";
			echo $_SESSION['username'];
			echo "<br>";
			echo "My favorite movie is ";
			echo $_REQUEST['favmovie'];
			echo "<br>";
			$movierate = 5;
			echo "My movie rating for this movie is: ";
			echo $movierate;
			} else {
				echo "My top ";
				echo $_REQUEST['movienum'];
				echo " movie are:";
				echo "<br>";
				
				listmovie_1();
				if ($_REQUEST['movienum'] == 10) {
					listmovie_2();
				}
			}
			 
			
			?>
		</body>
	</head>
</html>