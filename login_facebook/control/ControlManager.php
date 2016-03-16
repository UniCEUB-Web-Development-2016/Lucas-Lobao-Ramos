<?php

include "UserManager.php";

$name = $_POST["n"];
$email = $_POST["e"];
$password = $_POST["p"];
$birthDate = $_POST["b"];

$UserManager = new UserManager();
$UserManager->newUser($name, $email, $password, $birthDate);