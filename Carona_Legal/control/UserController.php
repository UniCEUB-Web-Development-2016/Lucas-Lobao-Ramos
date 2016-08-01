<?php
class UserController {

	private $cnn;
	
	private $NewUserParameters = [
		"name" ,"lastName","email","cpf","rg","phoneNumber","birthDate","driver","carplate", "pass"
	];

	private $LoginParameters = [
		"cpf","pass"
	];
	//http://localhost/carona_legal/user?name=cadeira&lastName=Roxa&email=cebolinha@roxa.com&cpf=55555555555&rg=2222222&phoneNumber=6133021234&birthDate=01-01-1001&driver=N&carplate=nnnn1234&pass=123123

	public function __construct($cnn){
		$this->cnn = $cnn;
	}

	public function register($request) {		


		$parameters = $request->getParameters();
		
		switch($request->getSubResource()):

			
			case 'login':
		
				try{
					(new validator())->validateParameters($parameters, $this->LoginParameters);	
					
					$result = $this->cnn->query("SELECT * FROM user WHERE `cpf` LIKE '{$parameters['cpf']}' AND `pass` LIKE '{$parameters['pass']}';")->fetchAll(PDO::FETCH_ASSOC);
		
					if ($result == null){
						throw new Exception("Usuario nao encontrado! Favor verificar as credenciais!", 99);
					}else {
						$retorno = array(
							"auth" => true,
							"error" => null
						);
						return $retorno;
					}
					
				} catch (Exception $e){
					$retorno = array(
						"auth" => false,
						"error" => $e->getMessage()
					);
					return $retorno;
				}
				break;

			case null:
				try {

					(new validator())->validateParameters($parameters, $this->NewUserParameters);
					
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

					if( (new queryGenerator())->insertUser($User,$this->cnn) ){
						$retorno = array(
						"created" => true,
						"error" => null
						);
						return $retorno;
					}

				} catch (Exception $e){
					$retorno = array(
						"created" => false,
						"error" => $e->getMessage()
					);
					return $retorno;
				}
				break;

		endswitch;
	}

	public function search($request){

		$parameters = $request->getParameters();
		
		switch($request->getSubResource()):
			
			case 'getinfo':

				try{

					$result = $this->cnn->query("SELECT * FROM user WHERE `cpf` LIKE '{$parameters['cpf']}'")->fetchAll(PDO::FETCH_ASSOC);
		
					if ($result == null){
						throw new Exception("Usuario nao encontrado! Favor verificar as credenciais!", 99);
					}else {
						$retorno = array(
							"getinfo" => true,
							"result" => $result,
							"error" => null
						);
						return $retorno;
					}
					
				} catch (Exception $e){
					$retorno = array(
						"getinfo" => false,
						"error" => $e->getMessage()
					);
					return $retorno;
				}

				break;

		endswitch;

		return (new queryGenerator())->searchUser($request,$this->cnn);
	}

	public function update($request){
		return (new queryGenerator())->updateUser($request,$this->cnn);
	}
}