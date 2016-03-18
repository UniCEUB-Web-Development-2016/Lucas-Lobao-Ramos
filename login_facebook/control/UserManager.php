<?php

include "../model/User.php";
include "../util/FileManager.php";


class UserManager{
	


	private $file;

	public function __construct(){
		$this->file = new FileManager();
	}

	public function newUser($name, $email, $pass, $date){
		$user = new User($name, $email, $pass, $date);
		$this->file->write($user->getName().'.txt', $user->toString());
	}
}