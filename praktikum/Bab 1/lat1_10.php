<?php

$data_kendaraan = [
	'Mobil',
	'Bus',
	'Truck',
	'Sepeda Motor',
	'Sepeda',
	'Becak',
	'Andong'
];

echo "data sebelum diurutkan<br>";

foreach ($data_kendaraan as $data) {
	echo $data.' <br>';
}

echo '<br><br>';

sort($data_kendaraan);

echo "pengurutan dengan fungsi sort <br>";

foreach ($data_kendaraan as $data) {
	echo $data.' <br>';
}

echo '<br><br>';

rsort($data_kendaraan);

echo "pengurutan dengan fungsi rsort <br>";

foreach ($data_kendaraan as $data) {
	echo $data.' <br>';
}

echo '<br><br>';

asort($data_kendaraan);

echo "pengurutan dengan fungsi asort <br>";

foreach ($data_kendaraan as $data) {
	echo $data.' <br>';
}

echo '<br><br>';

arsort($data_kendaraan);

echo "pengurutan dengan fungsi arsort <br>";

foreach ($data_kendaraan as $data) {
	echo $data.' <br>';
}

echo '<br><br>';

ksort($data_kendaraan);

echo "pengurutan dengan fungsi ksort <br>";

foreach ($data_kendaraan as $data) {
	echo $data.' <br>';
}

echo '<br><br>';

krsort($data_kendaraan);

echo "pengurutan dengan fungsi krsort <br>";

foreach ($data_kendaraan as $data) {
	echo $data.' <br>';
}

echo '<br><br>';

?>