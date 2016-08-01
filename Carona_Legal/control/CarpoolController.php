<?php

// include_once "model/Carpool.php";

class CarpoolController {


	private $cnn;
	
	private $requiredParameters = [
		"cpf", "sLatitude", "sLongitude", "dLatitude", "dLongitude", "date", "time", "emptySeats"
	];
	//http://localhost/lucas-lobao-ramos/carona_legal/user?name=Cebola&lastName=Roxa&email=cebolinha@roxa.com&cpf=55555555555&rg=2222222&phoneNumber=6133021234&birthDate=01-01-1001&driver=N&carplate=nnnn1234
	
	public function __construct($cnn){
		$this->cnn = $cnn;
	}

	public function register($request) {		

		$parameters = $request->getParameters();		
		switch($request->getSubResource()):

			case 'newcarpool':
				try {
					(new validator())->validateParameters($parameters, $this->requiredParameters);
					$Carpool = new Carpool(
					
									$parameters["cpf"],
									$parameters["sLatitude"],
									$parameters["sLongitude"],
									$parameters["dLatitude"],
									$parameters["dLongitude"],
									$parameters["date"],
									$parameters["time"],
									null,
									null,
									$parameters["emptySeats"]
									);

					if( (new queryGenerator())->insertCarpool($Carpool,$this->cnn) ){
						$retorno = array(
							"created" => true,
							"error" => null
						);
						return $retorno;
					}
				}catch (Exception $e){
					$retorno = array(
						"created" => false,
						"error" => $e->getMessage()
					);
					return $retorno;
				}
				break;

			case null:

				try {
					$result =  (new queryGenerator())->getCarpool(null,$this->cnn);
					//$result = array_shift($result);
					if($result){
						$retorno = array(
							"carpool" => true,
							"result" => $result,
							"error" => null
						);
						return $retorno;
					}
				}catch (Exception $e){
					$retorno = array(
						"carpool" => false,
						"error" => $e->getMessage()
					);
					return $retorno;
				}

				break;
		endswitch;
	}

	public function search($request){
		return (new queryGenerator())->searchUser($request,$this->cnn);
	}

	public function update($request){
		return (new queryGenerator())->updateUser($request,$this->cnn);
	}
	
}