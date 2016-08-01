<?php

// include_once "model/Request.php";

class RequestController {

	public function createRequest($protocol, $method, $uri, $addr) {
		
		if ( strpos($uri, "?") != false ) {
			$resource = substr( $uri, 0, strpos($uri, "?") );
			$resource = explode("/", $resource);
		} else {
			$resource = explode("/", $uri);
		}

		return new Request(
				$protocol,
				$method,
				$resource[2],
				( isset($resource[3]) ) ? $resource[3] : null,
				$this->getParameters( substr( $uri, strpos($uri, "?") + 1, strlen($uri) ) ),
				$addr
			);
	}

	public function getParameters($array) {
		if(strpos($array, "=") != false) {
			$parameters = array();
			foreach (explode("&", $array) as $value) {
				$b = explode("=", $value);
				$parameters[$b[0]] = $b[1];			
			}
			return $parameters;
		} else {
			return null;
		}
	}
}