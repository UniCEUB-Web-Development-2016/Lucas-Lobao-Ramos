<?php

include_once "util/RequestRouter.php";
	

   //echo json_encode((new RequestRouter)->route());
   var_dump((new DBConnector("127.0.0.1","coolcarpool","mysql","3306","root",""))->getConnection());
