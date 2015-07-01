<?php
$x = 5;
$y = 10;

/* $GLOBAL[index] stored global variablels
 * [index] holds name of the variables
 *
 * */

function myTest() {
	$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y;
?>