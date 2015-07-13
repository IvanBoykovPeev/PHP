<?php

$city = "Plovdiv";
$state = "PL";
$event = "SHOW";

$location_vars = array("city", "state");

$arr = compact("event", "nothing_here", $location_vars);

echo "<pre>";
print_r($arr);
echo "</pre>";