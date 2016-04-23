<?php 

include_once "database/DBConnector.php";

class DatabaseController{

	private $dbConnection;

	public function __construct(){

		$dbCredentials = $this->getDatabaseCredentials();
		//var_dump($dbCredentials);
		return var_dump((new DBConnector($dbCredentials["ip"],$dbCredentials["name"],$dbCredentials["type"],$dbCredentials["port"],$dbCredentials["login"],''))->getConnection());
		//return (new DBConnector('127.0.0.1','coolcarpool','mysql','3306','root',''))->getConnection();
	}

	public function getDatabaseCredentials(){
		$file=file("database/database.txt", FILE_IGNORE_NEW_LINES);
		$DBparam = array();
		foreach ($file as $line){
			$explode = explode("=",$line);
			$DBparam[$explode[0]] = $explode[1];
		}

		return $DBparam;
		//	
		
	}

}