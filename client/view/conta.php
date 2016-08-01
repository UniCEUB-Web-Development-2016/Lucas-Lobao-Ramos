<?php
include('control/httpful.phar');

if(!isset($_SESSION['auth'])) {
	header("Location: http://localhost/client/home?error=99");
	exit();
}
	$url = "http://localhost/carona_legal/user/getinfo?cpf={$_SESSION['auth']}";

	$response = \Httpful\Request::get($url)->send();
	$response = json_decode($response->body, true);
	$params  = array_shift($response['result']);

?>
<h1>Seja bem vindo <?php echo $params['name']; ?></h1>

<ul>
	<li><a href="newCarpool">Nova carona</li>
	<li>		   Pesquisar Caronas</li>
	<li><a href="sair">Sair</a></li>

</ul>