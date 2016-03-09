<?php

include "newUser.php";
$user = new Usuario();
$name = $_POST["n"];
$email = $_POST["e"];
$password = $_POST["p"];
$birthDate = $_POST["b"];


$user->setName($name);
$user->setEmail($email);
$user->setPassword($password);
$user->setbirthDate($birthDate);

$user->createTextArquive();
