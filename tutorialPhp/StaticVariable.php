<?php

/*  static don'deleted variable $x
 *  $x stay local
 * */

function myTest() {
	static $x = 0;
	echo $x;
	$x++;
}

myTest();
myTest();
myTest();
?>