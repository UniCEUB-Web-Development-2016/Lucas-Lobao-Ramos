<?php

include_once "RequestController.php";
include_once "ResourceController.php";
include_once "DatabaseController.php";

class ControlManager
{
	private $resourceController;
	private $requestController;
	private $DB;

	public function __construct()
	{
		$this->resourceController = new ResourceController();

		$this->requestController = new RequestController();

		$this->DB = new DatabaseController();
	}

	public function getResource()
	{
		$request = $this->requestController->createRequest(
     		    $_SERVER["SERVER_PROTOCOL"],
			    $_SERVER["REQUEST_METHOD"],
			    $_SERVER["REQUEST_URI"],
			    $_SERVER["SERVER_ADDR"]);
		$user = $this->routeMethod($request);
		$this->DB->insertUser($user);
	}

	public function routeMethod($request)
	{
		
		switch($request->getMethod())
		{
			case "GET":
			           break;
			
			case "POST":

			   	return $this->resourceController->createResource($request);
			   	break;

			case "PUT":
			 			break;

			case "DELETE": 
						break;

			default:

		           
		}	
	}


}