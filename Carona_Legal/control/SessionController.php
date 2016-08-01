<?php

	
class SessionController{

	public function login($prm,$cnn){

		//var_dump ( $cnn->query("SELECT `cpf`, `pass` FROM user WHERE `cpf` LIKE '{$prm['cpf']}' AND `pass` LIKE '{$prm['pass']}';")->fetchAll(PDO::FETCH_ASSOC) );
		
	}
}
