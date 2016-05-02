<?php 

include_once "database/DBConnector.php";

class DatabaseController{

	private $cnn;

	public function __construct(){

		$dbCredentials = $this->getDatabaseCredentials();
		//var_dump($dbCredentials);
		$this->cnn = (new DBConnector($dbCredentials["ip"],$dbCredentials["name"],$dbCredentials["type"],$dbCredentials["port"],$dbCredentials["login"],''))->getConnection();
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
	}

	public function getConnection(){
		return $this->cnn;
	}
	public function teste(){
		return "OMG";
	}

	public function insertUser($obj){


		//echo "$obj->getName()";
		//$q = "INSERT INTO `tb_user`(`name`, `lastName`, `email`, `cpf`, `rg`, `phoneNumber`, `birthDate`, `driver`, `carplate`) VALUES ($obj->getName(),$obj->getLastName(),$obj->getEmail(),$obj->getCpf(),$obj->getRg,$obj()->getPhoneNumber(),$obj->getBirthDate(),$obj->getDiver(),'null');";
		$q = "INSERT INTO tb_user(name, lastName, email, cpf, rg, phoneNumber, birthDate, driver, carplate) 
			VALUES ('".$obj->getName()."','"
					.$obj->getLastName()."','"
					.$obj->getEmail()."','"
					.$obj->getCpf()."','"
					.$obj->getRg()."','"
					.$obj->getPhoneNumber()."','"
					.$obj->getBirthDate()."','"
					.$obj->getDriver()."',
					'null');";
		var_dump($q);
		$this->cnn->query($q);
		
	}

}