<?php

if (isset($_POST['nama'])) {
	insert($_POST);
	header('location: index.php');
}

function insert($post)
{
	$filename = "file.txt";
	$file = file_get_contents($filename);
	$dataAll = explode("|R|", $file);

	$nama = $post['nama'];
	$email = $post['email'];
	$contentWE = replaceEmoticon($post['content']);
	$content = filter($contentWE);

	if($dataAll[0] == '')
		$format = $nama . "|F|" . $email . "|F|" . $content;
	else
		$format = "|R|".$nama . "|F|" . $email . "|F|" . $content;

	$handle = fopen($filename, 'a+');
	if($handle) {
		fwrite($handle, $format);
		fclose($handle);
	}
}

function replaceEmoticon($string)
{
	$list = [':p', ':)', ':D', ':\'D', ';)', ':('];
	
	$unicode = ['&#128523;', '&#128522;', '&#128512;', '&#128517;', '&#128521;', '&#128532;'];

	return str_replace($list, $unicode, $string);
}

function filter($string)
{
	$list = ['sapu-sapu', 'ikan', 'lele'];
	$sensored = ['s*p*-s*p*', 'i*k*', '*el*'];

	return str_replace($list, $sensored, $string);
}

?>