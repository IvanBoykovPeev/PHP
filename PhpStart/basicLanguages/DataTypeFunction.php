<?php

$a = 1;
$b = "Jonh";

foreach (get_defined_vars() as $key => $value) {
    print_r("Key is: $key ");
    print "<br>";
    print 'Value is:';
    print_r($value);
    print "<hr>";
}

echo gettype($a);
