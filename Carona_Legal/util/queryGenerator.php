<?php

class queryGenerator{
	
	public function insertCarpool($obj,$cnn){

		$cnn->query("INSERT INTO carpool(cpf, sLatitude, sLongitude, dLatitude, dLongitude, datee, timee, sRange, dRange, carpoolId, emptySeats) 
					VALUES(
					'{$obj->getCpf()}',
					'{$obj->getSLatitude()}',
					'{$obj->getSLongitude()}',
					'{$obj->getdLatitude()}',
					'{$obj->getdLongitude()}',
					'{$obj->getdate()}',
					'{$obj->gettime()}',
					'{$obj->getsRange()}',
					'{$obj->getdRange()}',
					'{$obj->getcarpoolId()}',
					'{$obj->getemptySeats()}';"
					);
	}
						

	public function insertUser($obj,$cnn){

		$cnn->query("INSERT INTO user(name, lastName, email, cpf, rg, phoneNumber, birthDate, driver, carplate, pass) 
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