<?php

include_once "util/RequestRouter.php";
	

   echo json_encode((new RequestRouter)->route());