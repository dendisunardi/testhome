<?php
/**
* 
*/
class Database
{
	private $host="localhost";
	private $db_name="phptest";
	private $usrname="root";
	private $password="b3ckm3d14";

	public $conn;

	function getConnection()
	{
		$this->conn = null;
		try
		{
			$this->conn = new PDO("
				mysql:host=" . $this->host .";
				dbname=" . $this->db_name, 
				$this->usrname, 
				$this->password
			);
		}
		return $this->conn;
	}
}
?>