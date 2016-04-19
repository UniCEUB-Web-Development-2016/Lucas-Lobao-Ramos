<?php
include_once "model/User.php";

class UserController{

	private $request;
	
	public function __construct($request){
		$this->request = $request;
		$method = $request->getMethod();
		echo $this->$method();
	}

	//http://localhost/lucas-lobao-ramos/carona_legal/user?name=Lucas&cpf=55555
	public function POST(){

		if (count($this->request->getParameters()) == 2){
			$this->register();
		}
	}

	public function register(){		

		
		$parameters = $this->request->getParameters();
		//var_dump($parameters);
		$User = new User(
						"Id=0",
						$parameters["name"],
						"lastName",
						"email",
						$parameters["cpf"],
						"rg",
						"phoneNumber",
						"birthDate",
						"driver",
						"carplate"
						);
		var_dump($User);
		//echo new User($Request->getParameters());
	}
}