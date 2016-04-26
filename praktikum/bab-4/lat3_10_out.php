<?php

$file_comm = "guestbook.txt";
$fh = fopen($file_comm, 'a+');

$i = 1;

while (($row = fgets($fh)) != null) {
    $row_exploded = explode(";", $row);
    echo "<br><strong>Baris ke $i</strong><br>";
    echo "Nama : $row_exploded[0]<br>";
    echo "Komentar : $row_exploded[1]<br>";
    $i++;
}

fclose($fh)

?>
