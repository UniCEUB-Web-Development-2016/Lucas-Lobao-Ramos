<?php

class queryGenerator{
	
	public function insert($obj,$cnn){

		$cnn->query("INSERT INTO user(name, lastName, email, cpf, rg, phoneNumber, birthDate, driver, carplate) 
					VALUES(
					'{$obj->getName()}',
					'{$obj->getLastName()}',
					'{$obj->getEmail()}',
					'{$obj->getCpf()}',
					'{$obj->getRg()}',
					'{$obj->getPhoneNumber()}',
					'{$obj->getBirthDate()}',
					'{$obj->getDriver()}',
					'null');"
					);
	}

	public function search($request,$cnn){
		return ( $cnn->query("SELECT `name`, `lastName`, `email`, `cpf`, `rg`, `phoneNumber`, `birthDate`, `driver`, `carplate` FROM user WHERE ".$this->generateCriteria($request->getParameters()))->fetchAll(PDO::FETCH_ASSOC) );
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