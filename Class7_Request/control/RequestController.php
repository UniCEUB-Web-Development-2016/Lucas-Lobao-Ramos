<?php


class RequestController
{

	public function executeRequest($request)
	{
		$uri = $request->get_uri();
		echo $this->getResource($uri);
	}


	public function getResource($uri)
	{
	     $a = explode('?', $uri);
	     return str_replace("&", "</br>", $a[1]);		
		
	}

}