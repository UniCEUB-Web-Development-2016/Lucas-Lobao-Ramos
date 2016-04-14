<?php

class Request{
	private $protocol;
	private $method;
	private $recourse;
	private $parameters;
	private $server_adress;

	public function __construct($protocol, $method, $recourse, $parameters, $server_adress){

		$this->protocol 	 = $protocol;
		$this->method 		 = $method;
		$this->recourse 	 = $recourse;
		$this->parameters 	 = $parameters;
		$this->server_adress = $server_adress;
	}
	
}