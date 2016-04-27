<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Form</title>
    </head>
    <body>
        <form action="lat3_2.php" method="post">
            <input type="text" placeholder="str" name="txt_input"></input>
            <input type="submit" value="Submit"></input>
        </form>
    </body>
</html>

<?php

if (isset($_POST['txt_input'])) {
    $str = $_POST['txt_input'];

    echo "<br><br>";
    echo "Lowercase semua : ".strtolower($str)."<br>";
    echo "Uppercase semua : ".strtoupper($str)."<br>";
    echo "Sentencase : ".ucwords($str)."<br>";
}

?>