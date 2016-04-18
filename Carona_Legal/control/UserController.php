<?php
include_once "model/User.php";

class UserController{
	private $request;
	
	public function __construct($request){
		
		$parameters = $request->getParameters();
		var_dump($parameters);
		//new User($parameters["name"],$parameters["cpf"]);
		//echo $User->getName;
		//echo $User->getCpf;
		//echo new User($Request->getParameters());
	}
}