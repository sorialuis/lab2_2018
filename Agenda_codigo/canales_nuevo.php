<?php

//Variables:canal

require 'configuracionBD.php';

$canal = $_POST["canal"];

$consulta = $base->query("INSERT INTO `canales` (`CANALES_id`, `CANALES_nombre`) VALUES (NULL, '$canal')");

if(!$consulta){
    die("Error");

}
else{
		$url_dest = "menu.php";
}
mysqli_close($base);
Header ("Location: ".$url_dest);
?>