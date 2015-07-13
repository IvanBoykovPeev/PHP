<?php

//array key
$key = array('green', 'red', 'yellow');
//array value
$values = array('avocado', 'apple', 'banana');
//result array
$result = array_combine($key, $values);

echo "<pre>";
print_r($result);
echo "</pre>";
