<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Form Commentar</title>
    </head>
    <body>
        <form action="lat3_10.php" method="post">
            <input type="text" name="nama" placeholder="Nama"></input><br><br>
            <textarea name="komentar" placeholder="Komentar" cols="50" rows="20"></textarea><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>

<?php

$file_comm = "guestbook.txt";
$fh = fopen($file_comm, 'a+');

if (isset($_POST['nama']) && isset($_POST['komentar'])) {
    $nama = $_POST['nama'];
    $komm = $_POST['komentar'];
    $line = "$nama;$komm\n";
    fwrite($fh, $line);
}

fclose($fh);

?>
