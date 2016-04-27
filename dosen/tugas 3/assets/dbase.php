<?php

class Dbase
{
	
	static function koneksi()
	{
		$host = "127.0.0.1";
		$username = "pemweb";
		$password = "pemweb12345";
		$db_name = "pemweb2016"; 
		
		return new mysqli($host, $username, $password, $db_name);

		if(mysqli_connect_errno()) {
			return "Error: Could not connect to database.";
			exit;
		}
	}
}


?>
