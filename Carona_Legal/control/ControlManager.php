<?php

// include_once "RequestController.php";
// include_once "ResourceController.php";
// include_once "DatabaseController.php";

class ControlManager
{
	private $resourceController;
	private $requestController;
	private $DB;

	public function __construct()
	{
		$this->resourceController = new ResourceController();

		$this->requestController = new RequestController();

		$this->DB = (new DatabaseController())->getConnection();
	}

	public function getResource()
	{
		$request = $this->requestController->createRequest(
	 			$_SERVER["SERVER_PROTOCOL"],
				$_SERVER["REQUEST_METHOD"],
				$_SERVER["REQUEST_URI"],
				$_SERVER["SERVER_ADDR"]);
		return $this->routeMethod($request);
	}

	public function routeMethod($request)
	{
		
		switch($request->getMethod())
		{
			case "GET":
				return $this->resourceController->searchResource($request,$this->DB);
			
			case "POST":
			   	return $this->resourceController->createResource($request,$this->DB);

			case "PUT":
			 	return $this->resourceController->updateResource($request,$this->DB);

			case "DELETE": 
				
				break;

			default:

		           
		}	
	}


}