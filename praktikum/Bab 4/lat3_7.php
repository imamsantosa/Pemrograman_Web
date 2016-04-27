<?php
	$myFile = "testFile.txt";
	$fh = fopen($myFile, 'r');
	// $theData = fgets($fh);
	// fclose($fh);
	// echo $theData;

	$i = 1;
	while (($line = fgets($fh)) != null) {
		if ($i == 2) {
			echo $line;
			break;
		}
		$i++;
	}

?>
