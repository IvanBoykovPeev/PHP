<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Strict//EN”
“http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd”>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Hello</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1><?php
		/*
		 * This code displays the
		 * current time and date in
		 * easy-to-read format.
		 * */
		 
		$currentTime = date("j:M:Y g:i:s a");
		
		//format date j-day M-month Y-year
		//g-hour, i-minute, s-seconds, a is for am/pm
		
		#Display greeting and date/time to the visitor
		
		echo "Hello world! The current time is $currentTime";
		?></h1>
	</body>
</html>