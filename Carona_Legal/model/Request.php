<?php

class Request{
	private $protocol;
	private $method;
	private $resource;
	private $parameters;
	private $server_address;

	public function __construct($protocol, $method, $resource, $sub_resource, $parameters, $server_address){
		
		$this->protocol 		= $protocol;
		$this->method 			= $method;
		$this->resource 		= $resource;
		$this->sub_resource 	= $sub_resource;
		$this->parameters 		= $parameters;
		$this->server_address 	= $server_address;
	}

	/*
	* @return String
	*/
	public function getProtocol(){
		return $this->protocol;
	}

	/*
	* @return String
	*/
	public function getMethod(){
		return $this->method;
	}

	/*
	* @return String
	*/
	public function getResource(){
		return $this->resource;
	}

	/*
	* @return String
	*/
	public function getSubResource(){
		return $this->sub_resource;
	}

	/*
	* @return Array
	*/
	public function getParameters(){
		return $this->parameters;
	}

	/*
	* @return String
	*/
	public function getAddress(){
		return $this->server_address;
	}	
}