<?php
include_once "model/User.php";
include_once "model/Request.php";
include_once "util/queryGenerator.php";

class UserController{
	
	

	//http://localhost/lucas-lobao-ramos/carona_legal/user?name=Cebola&lastName=Roxa&email=cebolinha@roxa.com&cpf=55555555555&rg=2222222&phoneNumber=6133021234&birthDate=01-01-1001&driver=N&carplate=nnnn1234
	

	public function register($request,$cnn){		

		
		$parameters = $request->getParameters();
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

		(new queryGenerator())->insert($User,$cnn);
		//echo new User($Request->getParameters());
	}

	public function search($request,$cnn){
		return (new queryGenerator())->search($request,$cnn);

	}
}
