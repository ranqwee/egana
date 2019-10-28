<?php
session_start();
//membuat database
class database
{
	public $host = "localhost";
	public $user = "root";
	public $pass = "";
	public $dbname = "qc";
	
	//membuat fungsi untuk koneksi
	function koneksi()
	{
		mysql_connect($this->host,$this->user,$this->pass);
		mysql_select_db($this->dbname);
	}
}

class pengguna
{
	function login_pengguna($uid,$pass)
	{
		$pass = $pass;
		$ambildata = mysql_query("SELECT * FROM user WHERE Username='$uid' AND Password='$pass'");
		$hitung = mysql_num_rows($ambildata);
		$pecah = mysql_fetch_array($ambildata);
		if($hitung>0)
		{
			//login
			$_SESSION['Id_User'] = $pecah['Id_User'];
			$_SESSION['Nama_Lengkap'] = $pecah['Nama_Lengkap'];
			$_SESSION['Username'] = $pecah['Username'];
			$_SESSION['Password'] = $pecah['Password'];
			$_SESSION['Jabatan'] = $pecah['Jabatan'];
			return true;
		}
		else
		{
			return false;
		}
			
	}
	function logout_pengguna()
	{
		session_destroy();
	}
}

$db = new database();
$db->koneksi();
$pengguna = new pengguna();
?>