<?php

class Request{
	private $protocol;
	private $method;
	private $resource;
	private $parameters;
	private $server_address;

	public function __construct($protocol, $method, $resource, $parameters, $server_address){
		
		$this->protocol 		= $protocol;
		$this->method 			= $method;
		$this->resource 		= $resource;
		$this->parameters 		= $parameters;
		$this->server_address 	= $server_address;
	

	}




	public function getProtocol(){
		return $this->protocol;
	}

	public function getMethod(){
		return $this->method;
	}

	public function getResource(){
		return $this->resource;
	}

	public function getParameters(){
		return $this->parameters;
	}

	public function getAddress(){
		return $this->address;
	}	
}