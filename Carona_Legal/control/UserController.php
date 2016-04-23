<?php
include_once "model/User.php";

class UserController{

	private $request;
	
	public function __construct($request){
		$this->request = $request;
		$method = $request->getMethod();
		return $this->$method();
	}

	//http://localhost/lucas-lobao-ramos/carona_legal/user?name=Cebola&lastName=Roxa&email=cebolinha@roxa.com&cpf=55555555555&rg=2222222&phoneNumber=6133021234&birthDate=01-01-1001&driver=N&carplate=nnnn1234
	public function POST(){
		$p = $this->request->getParameters();
		if(
			array_key_exists("name",		$p) && 
			array_key_exists("lastName",		$p) && 
			array_key_exists("email",		$p) && 
			array_key_exists("cpf",			$p) && 
			array_key_exists("rg",			$p) && 
			array_key_exists("phoneNumber",		$p) && 
			array_key_exists("birthDate",		$p) && 
			array_key_exists("driver",		$p) &&
			array_key_exists("carplate",		$p)
			){
			return $this->register();
		}
	}

	public function register(){		

		
		$parameters = $this->request->getParameters();
		//var_dump($parameters);
		$User = new User(
						$parameters["name"],
						$parameters["lastName"],
						$parameters["email"],
						$parameters["cpf"],
						$parameters["rg"],
						$parameters["phoneNumber"],
						$parameters["birthDate"],
						$parameters["driver"],
						$parameters["carplate"]
						);
		return $User;
		//echo new User($Request->getParameters());
	}
}
