<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");



$comma = ",";

$words = [
	"one"=>"едно",
	"two"=>"две",
	"three"=>"три"
	];
$a = count($words);
$a1 = count($words)-1;
echo "[";
foreach ($words as $key => $value) {
	$a--;
	if ($a > 0) {
		echo '{"en":"' . $key . '","bg":"' . $value . '"},';
		
	} else {
		echo '{"en":"' . $key . '","bg":"' . $value . '"}';
	}
	
}

echo "]";
?>