<?php 

// include_once "database/DBConnector.php";

class DatabaseController{

	private $cnn;

	public function __construct(){

		$dbCredentials = $this->getDatabaseCredentials();
		$this->cnn = ( (new DBConnector($dbCredentials["ip"],$dbCredentials["name"],$dbCredentials["type"],$dbCredentials["port"],$dbCredentials["login"],''))->getConnection() );
	}

	public function getDatabaseCredentials(){
		$file=file("model/database.txt", FILE_IGNORE_NEW_LINES);
		$DBparam = array();
		foreach ($file as $line){
			$explode = explode("=",$line);
			$DBparam[$explode[0]] = $explode[1];
		}

		return $DBparam;		
	}

	public function getConnection(){
		return $this->cnn;
	}
}