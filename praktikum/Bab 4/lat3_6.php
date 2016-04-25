<?php
	$myFile = "testFile.txt";
	$fh = fopen($myFile, 'r');
	$theData = fread($fh, 7);
	fclose($fh);
	echo $theData;
?>