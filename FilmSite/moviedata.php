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
}
	else {
		echo "Successsful connect<br>";
	}
	//select database
	mysqli_select_db($conn, "moviesite");
	//insert data into "movie" table
	$insert = "INSERT INTO movie (movie_id, movie_name, movie_type, movie_year, 
		movie_leadactor, movie_director)
		VALUES (1, 'Bruse Almighty', 5, 2003, 1, 2), 
		(2, 'Office Space', 5, 1999, 5, 6),
		(3, 'Grand Canyon', 2, 1991, 4, 3)";
		
		//check and run SQL
	if (mysqli_query($conn, $insert)) {
		echo "New record created successfully<br>";
	} else {
		echo "Error: " . $type . "<br>" . mysqli_error($conn);
	}		
echo mysqli_affected_rows($conn) . "<br>";		
$type = "INSERT INTO movietype (movietype_id, movietype_label)
         VALUES (1, 'Sci Fi'),
         	    (2, 'Drama'),
     			(3, 'Adventure'),
         	    (4, 'War'),
         	    (5, 'Comedy'),
     	        (6, 'Horror'),
                (7, 'Action'),
                (8, 'Kids')";
//check and run SQL
	if (mysqli_query($conn, $type)) {
		echo "New record created successfully<br>";
	} else {
		echo "Error: " . $type . "<br>" . mysqli_error($conn);
	}		 
echo mysqli_affected_rows($conn) . "<br>";	
	//insert data into "people" table
	$people = "INSERT INTO people (people_id, people_fullname, 
	people_isactor, people_isdirector)
	VALUES (1, 'Jim Carrey', 1, 0),
	       (2, 'Tom Shadyac', 0, 1),
	       (3, 'Lawrence Kasdan', 0, 1),
	       (4, 'Kevin Kline', 1, 0),
	       (5, 'Ron Livingston', 1, 0),
	       (6, 'Mike Judge', 0, 1)";
	//check and run SQL
	if (mysqli_query($conn, $people)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $people . "<br>" . mysqli_error($conn);
	}
	echo mysqli_affected_rows($conn) . "<br>";
	echo "Data inserted successfully";	 
	mysqli_close($conn);
?>