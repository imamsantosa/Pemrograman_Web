<?php

function pangkat($x, $y)
{
	$hasil = $x;
	for ($i=1; $i < $y; $i++) { 
		$hasil *= $x;
	}

	return $hasil;
}

function pangkatRekursif($x, $y)
{
	return ($y == 1)? $x : $x * pangkatrekursif($x, --$y);
}

$pangkat = pangkat(2,5);
$pangkatRekursif = pangkatRekursif(2,5);
$pow = pow(2,5);

echo "Perpangkatan 2 pangkat 5 dengan fungsi non rekursif hasilnya $pangkat <br>";
echo "Perpangkatan 2 pangkat 5 dengan fungsi rekursif hasilnya $pangkatRekursif <br>";
echo "Perpangkatan 2 pangkat 5 dengan fungsi pow hasilnya $pow <br>";

?>