<?php

include_once "util/RequestRouter.php";
	
	//echo "<h2>USER:</h2>";
   	//echo json_encode((new RequestRouter)->route());
   	echo json_encode( (new RequestRouter)->route() );
