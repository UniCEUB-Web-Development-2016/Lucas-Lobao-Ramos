<?php

include("autoload.php");
echo json_encode( (new RequestRouter)->route() );
