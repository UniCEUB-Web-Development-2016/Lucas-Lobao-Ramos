<?php

include_once "RequestController.php";
include_once "ResourceController.php";
include_once "database/DBConnector.php";

class ControlManager
{
	private $resourceController;
	private $requestController;

	public function __construct()
	{
		$this->resourceController = new ResourceController();

		$this->requestController = new RequestController();

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
}