<?php

unset($_SESSION['auth']);

if(isset($_SESSION['auth'])){
	echo 'seession ainda esta ativa';
} else {
	echo 'session foi destruida';
}

?>

