<?php

function faktorial($x) {
	if ($x == 1) return 1;
	else return $x * faktorial($x - 1);
}

session_start();

$bil = $_POST["bil"];
$hasilFaktorial = faktorial($bil);
$data = [
	"bil" => $bil, 
	"nilai_faktorial" => $hasilFaktorial,
	"nim" => "145150201111103",
	"nama" => "Ridho"
];

$_SESSION["data"] = $data;

echo "<a href=\"Lat3_3c.php\">Click Here</a>";

?>
