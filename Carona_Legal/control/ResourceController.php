<?php
class ResourceController{
	
	private $ResourceMap = [
		"carpool" 	=> "CarpoolController",
		"user"		=> "UserController",
		"uber"		=> "UberController"
	];

	public function createResource($request,$cnn){
		return (new $this->ResourceMap[$request->getResource()]($cnn))->register($request);
	}

	public function searchResource($request,$cnn){
		return (new $this->ResourceMap[$request->getResource()]($cnn))->search($request);
	}

	public function updateResource($request,$cnn){
		return (new $this->ResourceMap[$request->getResource()]($cnn))->update($request);
	}
}