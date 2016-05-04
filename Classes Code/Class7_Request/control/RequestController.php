<?php


class RequestController
{

	public function executeRequest($request)
	{
		$uri = $request->get_uri();
		print_r($this->getResource($uri));
	}

	private function getResource($uri)
	{
	     $a = explode('?', $uri);				//Getting all parameters of URI
		 $parameters = explode('&', $a[1]);		//Separating URI parameters by "&" element
		 $treatedParameters = array(); 			//Creating a empty array to store the parameters in key-value format
		 foreach ($parameters as $value){		//Here foreach is used to separate each parameter by "=" element,
		 	$b = explode('=',$value);			//they will be stored in a new array
		 	$treatedParameters[$b[0]] = $b[1];	//now storing what is before "=" as a key and what is after as a value!
		 }		 
		 return $treatedParameters;
	}
}
/*
		 !!REFERENCE!!
		 http://php.net/manual/en/function.array-push.php
		 Rodrigo de Aquino ¶
		 4 years ago

		 If you're going to use array_push() to insert a "$key" => "$value" pair into an array, it can be done using the following:

		    $data[$key] = $value;

		It is not necessary to use array_push.
*/