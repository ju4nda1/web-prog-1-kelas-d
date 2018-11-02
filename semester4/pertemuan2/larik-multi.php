<?php
$data = array(
	"web-prog" =>
		array(
			"Nazil" => 5,
			"bang pii" => 7,
			"gunawan" => 9),
	"kalkulus" =>
		array(
			"gunawan" => 6,
			"bang pii" => 8,
			"nazil" => 7)
	);
echo "Nilai web-prog Nazil : ".
	$data["web-prog"]["Nazil"]. "<br>";
echo "Nilai kalkulus Gunawan : ".
	$data["kalkulus"]["gunawan"]. "<br>";
?>