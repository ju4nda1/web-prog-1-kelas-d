<?php
class koneksi {
	private $server = "localhost";
	private $username = "root";
	private $password = "";
	private $db = "php_kelas_d";
	private $hubungan;

	function ambilkoneksi(){
		$hubungan = new mysqli($this->server, $this->username, 
        	$this->password, $this->db);
		return $hubungan;
	}
}
?>