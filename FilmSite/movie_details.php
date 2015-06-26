<?php

$link = mysqli_connect("localhost", "blade", "wMHsQwaLKH7s79Yu", "moviesite") or die(mysqli_error($link));

/* Function to calculate if a movie made a profit,
 loss or broke even*/
function calculate_diffrences($takings, $cost) {
	$difference = $takings - $cost;

	if ($difference < 0) {
		$difference = substr($difference, 1);
		$font_color = 'red';
		$profit_or_loss = "$" . $difference . "m";
	} else if ($difference > 0) {
		$font_color = 'green';
		$profit_or_loss = "$" . $difference . "m";
	} else {
		$font_color = 'blue';
		$profit_or_loss = "Broke even";
	}
	return "<font color=\"$font_color\">" . $profit_or_loss . "</font>";
}

/*Function to get the director's name from the people table*/
function get_director() {
	global $movie_director;
	global $director;
	$link = mysqli_connect("localhost", "blade", "wMHsQwaLKH7s79Yu", "moviesite") or die(mysqli_error($link));
	$query_d = "SELECT people_fullname " . "FROM people " . "WHERE people_id='$movie_director'";
	$results_d = mysqli_query($link, $query_d) or die(mysqli_error());
	$row_d = mysqli_fetch_assoc($results_d);
	extract($row_d);
	$director = $people_fullname;

}

/*Function to get the lead actor's name from the people table*/
function get_leadactor() {
	global $movie_leadactor;
	global $leadactor;
	$link = mysqli_connect("localhost", "blade", "wMHsQwaLKH7s79Yu", "moviesite") or die(mysqli_error($link));
	$query_a = "SELECT people_fullname " . "FROM people " . "WHERE people_id='$movie_leadactor'";
	$result_a = mysqli_query($link, $query_a) or die(mysqli_error($link));
	$row_a = mysqli_fetch_assoc($result_a);
	extract($row_a);
	$leadactor = $people_fullname;
}

function generate_ratings($revie_rating) 
{
	$movie_rating = '';
	for ($i=0; $i < $revie_rating; $i++) { 
		$movie_rating .= "<img src=\"green-check-mark.gif\">&nbsp;";
	}
	return $movie_rating;
}

$movie_query = "SELECT * FROM movie " . "WHERE movie_id =' " . $_GET['movie_id'] . " ' ";
$movie_result = mysqli_query($link, $movie_query) or die(mysqli_error($link));
$movie_table_headings = <<<EOD
	<tr>
		<th>Movie Title</th>
		<th>Year of Release</th>
		<th>Movie Director</th>
		<th>Movie Lead Actor</th>
		<th>Movie Running Time</th>
		<th>Movie Health</th>
	</tr>
EOD;

$review_table_headings =<<<EOD
<tr>
<th>Date of Review</th>
<th>Review Title</th>
<th>Date of Review</th>
<th>Reviewer Name</th>
<th>Rating</th>
</tr>

EOD;

$review_query = "SELECT * FROM reviews " . "WHERE review_movie_id ='" . $_GET['movie_id'] . "' " . 
"ORDER BY review_date DESC";

$review_result = mysqli_query($link, $review_query) 
or die(mysqli_error($link));

while ($review_row = mysqli_fetch_assoc($review_result)) {
	$review_flag = 1;
	$review_title[] = $review_row['review_name'];
	$review_name[] = ucwords($review_row['review_reviewer_name']);
	$review[] = $review_row['review_comment'];
	$review_date[] = $review_row['review_date'];
	$review_rating[] = generate_ratings($review_row['review_rating']);
}

while ($row = mysqli_fetch_assoc($movie_result)) {
	$movie_name = $row['movie_name'];
	$movie_director = $row['movie_director'];
	$movie_leadactor = $row['movie_leadactor'];
	$movie_year = $row['movie_year'];
	$movie_running_time = $row['movie_running_time'];
	$movie_takings = $row['movie_takings'];
	$movie_cost = $row['movie_cost'];

	//get director's name from people table
	get_director();

	//get leadactor's name from people table
	get_leadactor();
}

$movie_health = calculate_diffrences($movie_takings, $movie_cost);
$page_start = <<<EOD
<html>
<head>
<title>Details and Reviews for: $movie_name</title>
</head>
<body>
EOD;

$movie_details = <<<EOD
<table width="70%" border="0" cellspacing="2" cellpadding="2" align="center">
<tr>
<th colspan="6"><u><h2>$movie_name: Details</h2></u></th>
</tr>
$movie_table_headings
<tr>
<td width="33%" align="center">$movie_name</td>
<td align="center">$movie_year</td>
<td align="center">$director</td>
<td align="center">$leadactor</td>
<td align="center">$movie_running_time</td>
<td align="center">$movie_health</td>
</tr>
</table>
<br>
<br>
EOD;

$i = 0;
$review_details = '';
while ($i<sizeof($review)) {
	$review_details.=<<<EOD
	<tr>
	<td width="15" valign="top" align="center">$review_date[$i]</td>
	<td width="15" valign="top">$review_title[$i]</td>
	<td width="10" valign="top">$review_name[$i]</td>
	<td width="50" valign="top">$review[$i]</td>
	<td width="10" valign="top" align="center">$review_rating[$i]</td>
</tr>	
EOD;
$i++;
}

if ($review_flag) {
	$movie_details .=<<<EOD
	<table width="95%" border="0" cellspacing="2" cellpadding="20" align="center">
	$review_table_headings
	$review_details
	</table>
EOD;
}

$page_end = <<<EOD
</body>
</html>
EOD;

$detailed_movie_info = <<<EOD
	$page_start
	$movie_details
	$page_end

EOD;

echo $detailed_movie_info;
mysqli_close($link);




?>