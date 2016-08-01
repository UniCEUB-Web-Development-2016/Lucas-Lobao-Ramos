<?php

class validator{


	public function validateParameters($parameters, $requiredParameters){
		foreach ($requiredParameters as $key) {
			if(!$this->isIn($key,$parameters)){
			throw new Exception("Error! Parameter '$key' not found on your request!", 1);				
			}
		}
		return true;
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

