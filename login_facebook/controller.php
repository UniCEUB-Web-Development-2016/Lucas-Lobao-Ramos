<?php

include "newUser.php";
new User = new newUser();
$name = $_POST[];
$email = $_POST[];
$password = $_POST[];
$birthDate = $_POST[];

new User = new newUser();

$user->setName($name);
$user->setEmail($email);
$user->setPassword($password);
$user->setbirthDate($birthDate);

$user->createTextArquive();
