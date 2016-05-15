<?php
include_once "model/User.php";
include_once "model/Request.php";
include_once "util/queryGenerator.php";
include_once "util/validator.php";

class UserController {

	private $cnn;
	
	private $requiredParameters = [
		"name" ,"lastName","email","cpf","rg","phoneNumber","birthDate","driver","carplate", "pass"
	];
	//http://localhost/lucas-lobao-ramos/carona_legal/user?name=Cebola&lastName=Roxa&email=cebolinha@roxa.com&cpf=55555555555&rg=2222222&phoneNumber=6133021234&birthDate=01-01-1001&driver=N&carplate=nnnn1234
	
	public function __construct($cnn){
		$this->cnn = $cnn;
	}

	public function register($request) {		

		
		$parameters = $request->getParameters();
		try {
			(new validator())->validateParameters($parameters, $this->requiredParameters);
			$User = new User(
			
							$parameters["name"],
							$parameters["lastName"],
							$parameters["email"],
							$parameters["cpf"],
							$parameters["rg"],
							$parameters["phoneNumber"],
							$parameters["birthDate"],
							$parameters["driver"],
							$parameters["carplate"],
							$parameters["pass"]
							);

			(new queryGenerator())->insertUser($User,$this->cnn);
		} catch (Exception $e){
			return $e->getMessage();
		}
	}

	public function search($request){
		return (new queryGenerator())->searchUser($request,$this->cnn);
	}

	public function update($request){
		return (new queryGenerator())->updateUser($request,$this->cnn);
	}
}