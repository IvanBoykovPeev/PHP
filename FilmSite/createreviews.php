<?php
$link = mysqli_connect("localhost", "blade", "wMHsQwaLKH7s79Yu", "moviesite") or die(mysqli_error());

//create "reviews" table
$reviews = "CREATE TABLE reviews (
    review_movie_id int(11) NOT NULL,
	review_date date NOT NULL,
	review_name varchar(255) NOT NULL,
	review_reviewer_name varchar(255) NOT NULL,
	review_comment varchar(255) NOT NULL,
	review_rating int(11) NOT NULL default 0,
	KEY (review_movie_id)
	)";
	
$results = mysqli_query($link, $reviews) or die(mysqli_error($link));

//populate the "reviews" table
$insert = "INSERT INTO reviews (review_movie_id, review_date, review_name, 
	review_reviewer_name, review_comment, review_rating)
	VALUES
	('1','2003-08-01', 'This movie rocks', 'Jon Doe', 'I thought this was a great movie even though
	my girlfrend made see it against my will.', '4'),
	('1','2003-08-01', 'An okay movie', 'Billy Bobe', 'This was an okay movie. I liked Eraserhead better.', '2'),
	('1','2003-08-10', 'Woo hoo', 'Peppermint Patty', 'Wish I\'d have seen it sooner!', '5'),
	('2','2003-08-01', 'My favorite movie', 'Marvin Marian', 'I did\'t wear my flair to the movie but I loved it anyway.', '5'),
	('3','2003-08-01', 'An awesome time', 'George B.', 'I liked this movie, even though I thought it was an infor mational video from our travel agent.', '3')
	";

$inert_results = mysqli_query($link, $insert) or die(mysqli_error($link));
?>