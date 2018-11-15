<?php

$host = 'localhost';
$nombreBD = 'sorialui_agenda';
$user = 'sorialuis';
$password = 'fcefyn123';

$base = mysqli_connect($host, $user, $password, $nombreBD) 
    or die('No se pudo conectar: ' . mysqli_error());

?>