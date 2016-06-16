<?php

include_once "model/Request.php";

class RequestController {

	public function createRequest($protocol, $method, $uri, $addr) {
		$a = explode("/", $uri);
		$b = explode("?", $a[2]);
		
		
		return new Request(
				$protocol,
				$method,
				$b[0],
				$this->getParameters($b[1]),
				$addr
			);
	}

	public function getParameters($array) {
		$parameters = array();
		foreach (explode("&", $array) as $value) {
			$b = explode("=", $value);
			$parameters[$b[0]] = $b[1];			
		}
		return $parameters;
	}
}