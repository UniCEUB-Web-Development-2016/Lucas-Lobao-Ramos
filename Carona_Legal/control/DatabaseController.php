<?php 

include_once "database/DBConnector.php";

class DatabaseController{

	private $dbConnection;

	public function __construct(){

		$dbCredentials = $this->getDatabaseCredentials();
		return (new DBConnector($dbCredentials["ip"],$dbCredentials["name"],$dbCredentials["type"],$dbCredentials["port"],$dbCredentials["login"],$dbCredentials["pass"]))->getConnection();

	}

	public function getDatabaseCredentials(){
		$file=file("database/database.txt");
		$DBparam = array();
		foreach ($file as $line){
			$explode = explode("=",$line);
			$DBparam[$explode[0]] = $explode[1];
		}
		return $DBparam;
		//	
		
	}

}