<?php
include_once "model/User.php";

class UserController{
	private $request;
	
	public function __construct($request){
		
		$parameters = $request->getParameters();
		//var_dump($parameters);
		$User = new User("Id=0",$parameters["name"],"lastName","email",$parameters["cpf"],"rg","phoneNumber","birthDate","driver","carplate");
		echo $User->getName();
		echo $User->getCpf();
		//echo new User($Request->getParameters());
	}
}