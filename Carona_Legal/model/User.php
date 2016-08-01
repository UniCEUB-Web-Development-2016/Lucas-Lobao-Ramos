<?php

class User{

	private $name;        
	private $lastName;    
	private $email;       
	private $cpf;         
	private $rg;            
	private $phoneNumber; 
	private $birthDate; 
	private $driver;      
	private $carplate;  
	private $pass;  
	
	public function __construct($name,$lastName,$email,$cpf,$rg,$phoneNumber,$birthDate,$driver,$carplate,$pass){
		$this->name 		= $name;
		$this->lastName 	= $lastName;
		$this->email 		= $email;
		$this->cpf 			= $cpf;
		$this->rg 			= $rg;
		$this->phoneNumber 	= $phoneNumber;
		$this->birthDate 	= $birthDate;
		$this->driver 		= $driver;
		$this->carplate 	= $carplate;
		$this->pass 		= $pass;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getLastName(){
		return $this->lastName;
	}

	public function setLastName($lastName){
		$this->lastName = $lastName;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function setCpf($cpf){
		$this->cpf = $cpf;
	}

	public function getRg(){
		return $this->rg;
	}

	public function setRg($rg){
		$this->rg = $rg;
	}

	public function getPhoneNumber(){
		return $this->phoneNumber;
	}

	public function setPhoneNumber($phoneNumber){
		$this->phoneNumber = $phoneNumber;
	}

	public function getBirthDate(){
		return $this->birthDate;
	}

	public function setBirthDate($birthDate){
		$this->birthDate = $birthDate;
	}

	public function getDriver(){
		return $this->driver;
	}

	public function setDriver($driver){
		$this->driver = $driver;
	}

	public function getCarplate(){
		return $this->carplate;
	}

	public function setCarplate($carplate){
		$this->carplate = $carplate;
	}

	public function setPass($pass){
		$this->pass = $pass;
	}

	public function getPass(){
		return $this->pass;
	}


}