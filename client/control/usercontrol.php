<?php

include ('httpful.phar');

$url = "http://localhost/carona_legal/user?name={$_POST['name']}&lastName={$_POST['last']}&email={$_POST['email']}&cpf={$_POST['cpf']}&rg={$_POST['rg']}&phoneNumber={$_POST['phoneNumber']}&birthDate={$_POST['birthDate']}&driver={$_POST['driver']}&carplate={$_POST['carplate']}&pass={$_POST['pass']}";
$response = \Httpful\Request::post($url)->send();
echo "cadastrado com sucesso!";