<?php

/*
 *@description :
* @author Walter Arias - walter.arias.aguirre@gmail.com
* @version 1.0
 *
 */

$password = '12345';
$passwordHash =  password_hash($password, PASSWORD_DEFAULT);
var_dump($passwordHash);
echo '<br>';
echo $passwordHash;