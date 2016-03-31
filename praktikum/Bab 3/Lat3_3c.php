<?php

session_start();
print_r($_SESSION["data"]);
unset($_SESSION["data"]);

?>