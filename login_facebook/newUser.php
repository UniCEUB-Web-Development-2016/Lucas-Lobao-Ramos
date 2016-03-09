<?php

class Usuario{
	
	private $name;
	private $email;
	private $password;
	private $birthDate;
	
	public function setName($name){
	$this->name = name;
	}
	public function setEmail($email){
	$this->email = email;
	}
	public function setPassword($pass){
	$this->password = pass;
	}
	public function setbirthDate($dta){
	$this->birthDate = dta;
	}
	
	public function createTextArquive(){
	$arquive = fopen($name.'.txt','w');
	$fwrite($arquive, $name);
	$fwrite($arquive, $email);
	$fwrite($arquive, $password);
	$fwrite($arquive, $birthDate);
	fclose($arquive);
	}
}