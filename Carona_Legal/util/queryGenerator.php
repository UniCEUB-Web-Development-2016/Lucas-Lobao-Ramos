<?php

class queryGenerator{
	
	public function insertCarpool($obj,$cnn){

		$result = $cnn->query("INSERT INTO carpool(cpf, sLatitude, sLongitude, dLatitude, dLongitude, datee, timee, emptySeats) 
					VALUES(
					'{$obj->getCpf()}',
					'{$obj->getSLatitude()}',
					'{$obj->getSLongitude()}',
					'{$obj->getdLatitude()}',
					'{$obj->getdLongitude()}',
					'{$obj->getdate()}',
					'{$obj->gettime()}',
					'{$obj->getemptySeats()}');"
					);
		if($result == null){
			throw new Exception("Erro ao criar a carona! Favor tentar novamente!", 1);	
		} else {
			return true;
		}
	}

	public function getCarpool($obj,$cnn){

		$result = $cnn->query("SELECT * FROM carpool")->fetchAll(PDO::FETCH_ASSOC);
		if($result == null){
			throw new Exception("Erro ao criar a carona! Favor tentar novamente!", 1);	
		} else {
			return $result;
		}
	}

	//public function login
						

	public function insertUser($obj,$cnn){

		$result = $cnn->query("INSERT INTO user(name, lastName, email, cpf, rg, phoneNumber, birthDate, driver, carplate, pass) 
					VALUES(
					'{$obj->getName()}',
					'{$obj->getLastName()}',
					'{$obj->getEmail()}',
					'{$obj->getCpf()}',
					'{$obj->getRg()}',
					'{$obj->getPhoneNumber()}',
					'{$obj->getBirthDate()}',
					'{$obj->getDriver()}',
					'null',
					'{$obj->getPass()}');"
					);

		if($result == null){
			throw new Exception("Erro ao inserir o usuário! Favor tentar novamente", 1);	
		} else {
			return true;
		}
	}

	public function searchUser($request,$cnn){
		return ( $cnn->query("SELECT `name`, `lastName`, `email`, `cpf`, `rg`, `phoneNumber`, `birthDate`, `driver`, `carplate` FROM user WHERE ".$this->generateCriteria($request->getParameters()))->fetchAll(PDO::FETCH_ASSOC) );
	}

	public function updateUser($request,$cnn){
	/*
		$cnn->query("UPDATE user SET lastname = "lobao" WHERE cpf = 55555555555

			"
			);
	*/
	}

	private function generateCriteria($params){
		$criteria = "";
		foreach($params as $key => $value)
		{
			$criteria = $criteria.$key." LIKE '%".$value."%' OR ";
		}
		return substr($criteria, 0, -4);	
	}
}