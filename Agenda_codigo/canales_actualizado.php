<?php

//Variables:canal y id

require 'configuracionBD.php';

if ($_POST["Opcion"] == "Actualizar"){

    $canal = $_POST["canal_editado"];
    $id = $_POST["id"];
    
    $consulta = $base->query("UPDATE `canales` SET `CANALES_nombre` = '$canal' WHERE `canales`.`CANALES_id` = '".$id."'");
    if(!$consulta){
        die("Error");
    }
	else{
		$url_dest = "menu.php";
    }
}
else{
    $id = $_POST["id"];
    $consulta = $base->query("DELETE FROM `canales` WHERE `canales`.`CANALES_id` = '".$id."'");
    if(!$consulta){
        die("Error");
    
    }else{
		$url_dest = "menu.php";
    }
}

mysqli_close($base);
Header ("Location: ".$url_dest);
?>