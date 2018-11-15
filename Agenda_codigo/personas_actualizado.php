<?php
require 'configuracionBD.php';

if ($_POST["Opcion"] == "Actualizar") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
    $mail = $_POST["mail"];
    $telefono = $_POST["telefono"];
    $pais = $_POST["pais"];
    $id = $_POST["id"];
    
    $consulta = $base->query("UPDATE `personas` SET `PERSONAS_apellidos` = '$apellido', `PERSONAS_nombres` = '$nombre', `PERSONAS_dni` = '$dni', `PERSONAS_email` = '$mail', ".
							" `PERSONAS_telefono` = '$telefono', `PAISES_id_fk` = '$pais' WHERE `personas`.`PERSONAS_id` = '$id'");

    if(!$consulta){
        die("Error");
    }
	else{
		$url_dest = "menu.php";
    }
}
else{
    $id = $_POST["id"];
    $consulta = $base->query("DELETE FROM `personas` WHERE `personas`.`PERSONAS_id` =  '".$id."'");
    
    if(!$consulta){
        die("Error");
    }
	else{
		$url_dest = "menu.php";
    }
}

mysqli_close($base);
Header ("Location: ".$url_dest);
?>