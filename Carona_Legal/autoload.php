<?php
function autoload($className) {

	if(file_exists(__DIR__ . "/util/" . $className . ".php")) {
		
		include(__DIR__ . "/util/" . $className . ".php");

	} elseif(file_exists(__DIR__ . "/control/" . $className . ".php")) {
		
		include(__DIR__ . "/control/" . $className . ".php");

	} elseif(file_exists(__DIR__ . "/model/" . $className . ".php")) {
		
		include(__DIR__ . "/model/" . $className . ".php");

	} elseif(file_exists(__DIR__ . "/database/" . $className . ".php")) {
		
		include(__DIR__ . "/database/" . $className . ".php");

	}
	
}
spl_autoload_register("autoload");