<?php

class Product {
	//db connection and table name
	private $conn;
	private $table_name = "products";

	//obj properties
	public $id;
	public $name;
	public $description;
	public $price;
	public $create;

	//constructor with $db as database connection
	public function __construct($db){
		$this->conn = $db;
	}
}

?>