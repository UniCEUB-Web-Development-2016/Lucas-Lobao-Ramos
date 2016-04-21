<?php

include_once "RequestController.php";
include_once "ResourceController.php";
include_once "DatabaseController.php";

class ControlManager
{
	private $resourceController;
	private $requestController;
	private $DBConnector;

	public function __construct()
	{
		$this->resourceController = new ResourceController();

		$this->requestController = new RequestController();

		$this->DBConnector = new DatabaseController();
	}

	public function getResource()
	{
		$request = $this->requestController->createRequest(
     		    $_SERVER["SERVER_PROTOCOL"],
			    $_SERVER["REQUEST_METHOD"],
			    $_SERVER["REQUEST_URI"],
			    $_SERVER["SERVER_ADDR"]);
		return $this->resourceController->createResource($request);
	}

	public function getDatabaseConnection(){
		return $this->DBConnector;
	}


}