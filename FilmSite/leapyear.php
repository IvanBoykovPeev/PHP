<!DOCTYPE html>
<head>
	<title>Is it leap yeat?</title>
</head>
<body>
<?php
    $leapyear = date("L");
	if ($leapyear == 1) {
		echo "Hooray! It's leap year";
	} else {
		echo "Aww, sorry, mate.No leap year this year!";
	}
	
?>	
</body>

