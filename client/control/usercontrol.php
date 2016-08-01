<?php
session_start();
include('httpful.phar');


switch ($_POST["login"]) {
	case 'Entrar':

		$url = "http://localhost/carona_legal/user/login?cpf={$_POST['cpf']}&pass={$_POST['pass']}";

		$response = \Httpful\Request::post($url)->send();
		$response = json_decode($response->body, true);

		if($response['auth'] == true){
			$_SESSION['auth'] = $_POST['cpf'];
			header("Location: http://localhost/client/conta");
		} else {
			header("Location: http://localhost/client/home?error=99");
		}

		break;
	
	case 'Cadastrar!':
		$url = "http://localhost/carona_legal/user?name={$_POST['name']}&lastName={$_POST['last']}&email={$_POST['email']}&cpf={$_POST['cpf']}&rg={$_POST['rg']}&phoneNumber={$_POST['phoneNumber']}&birthDate={$_POST['birthDate']}&driver={$_POST['driver']}&carplate={$_POST['carplate']}&pass={$_POST['pass']}";
	$response = \Httpful\Request::post($url)->send();
	$response = json_decode($response->body, true);

	if($response['created'] == true){
		echo "cadastrado com sucesso";
	} else {
		echo "nao foi cadastro";
	}

}