<?php
include_once "model/User.php";
include_once "model/Request.php";
include_once "util/queryGenerator.php";

class UserController {
	
	private $requiredParameters = [
		"name" ,"lastName","email","cpf","rg","phoneNumber","birthDate","driver","carplate"
	];
	//http://localhost/lucas-lobao-ramos/carona_legal/user?name=Cebola&lastName=Roxa&email=cebolinha@roxa.com&cpf=55555555555&rg=2222222&phoneNumber=6133021234&birthDate=01-01-1001&driver=N&carplate=nnnn1234
	

	public function register($request, $cnn) {		

		
		$parameters = $request->getParameters();
		try {
			$this->validateParameters($parameters);
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

			(new queryGenerator())->insertUser($User,$cnn);
		} catch (Exception $e){
			return $e->getMessage();
		}
	}

	public function search($request,$cnn){
		return (new queryGenerator())->search($request,$cnn);
	}


	private function validateParameters($parameters){
		foreach ($this->requiredParameters as $key) {
			if(!$this->isIn($key,$parameters)){
			throw new Exception("Error! Parameter '$key' is missing in your request!", 1);					
			}
		}
	}

	private function isIn($prm,$array){
		foreach ($array as $key2 => $value) {
			if ($key2 == $prm){
				return true;
			}
		}
		return false;
	}
}