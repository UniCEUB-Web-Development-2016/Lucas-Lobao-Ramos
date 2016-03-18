<?php

class User{
	
	private $name;
	private $email;
	private $password;
	private $birthDate;
	
	/*
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
	*/

	public function __construct($name, $email, $pass, $dta){  			//Mestre Caio, porque usar somente uma função em vez de vários métodos set's?
		$this->name = $name;
		$this->email = $email;
		$this->password = $pass;
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

	public function toString()
	{
		return $this->name.'\n\r'.$this->email.'\n\r'.$this->password.'\n\r'.$this->birthDate;
		//return $this->name.$this->email;
	}
}