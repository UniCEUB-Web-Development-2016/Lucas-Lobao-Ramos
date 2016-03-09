<?php

class Usuario{
	
	private $name;
	private $email;
	private $password;
	private $birthDate;
	
	public function setName($name){
	$this->name = $name;
	}
	public function setEmail($email){
	$this->email = $email;
	}
	public function setPassword($pass){
	$this->password = $pass;
	}
	public function setbirthDate($dta){
	$this->birthDate = $dta;
	}
	
	public function getName(){
	return $this->name;
	}
	
	public function getEmail(){
	return $this->email;
	}
	
	public function getPassword(){
	return $this->password;
	}
	
	public function getbirthDate(){
	return $this->birthDate;
	}
	
	public function createTextArquive(){
	$arquive = fopen(self::getName().'.txt','w');
	fwrite($arquive, self::getName());
	fwrite($arquive, "\r\n");
	fwrite($arquive, self::getEmail());
	fwrite($arquive, "\r\n");
	fwrite($arquive, self::getPassword());
	fwrite($arquive, "\r\n");
	fwrite($arquive, self::getbirthDate());
	fclose($arquive);
	}
}
