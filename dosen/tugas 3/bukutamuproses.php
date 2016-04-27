<?php

require_once('assets/dbase.php');

class BukuTamu
{
	
	private $dbase;

	function __construct()
	{
		$this->dbase = Dbase::koneksi();
	}

	function insert($data)
	{
		$nama = $data['nama'];
		$email = $data['email'];
		$pesan = $data['pesan'];

		$query = "INSERT INTO `A1_BUKUTAMU` (`NAMA`, `EMAIL`,`PESAN`) VALUES ('$nama', '$email', '$pesan' )";

		return $this->dbase->query($query);
	}
}

?>