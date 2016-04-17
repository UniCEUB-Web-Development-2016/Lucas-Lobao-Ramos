<?php

include_once "model/Request.php";
//include_once "control/UserController.php";

class ResourceController{
	

	public function createResource($request){
		
		return $request->getResource();
	}
}