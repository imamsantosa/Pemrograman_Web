<?php
	$myFile = "testFile.txt";
	$fh = fopen($myFile, 'r');
	while ($theData = fgets($fh)) {
		var_dump($theData);
	}
	fclose($fh);
?>