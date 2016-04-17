<?php

include_once "control/ControlManager.php";

class RequestRouter
{
	
	public function route()
	{
		
     	return (new ControlManager)->getResource();		
	}
}
