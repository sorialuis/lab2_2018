<?php
//Variables:nombre,apellido,dni,mail,telefono,paises

require 'configuracionBD.php';

$id_persona = $_POST["contacto_persona"];
$id_canal = $_POST["contacto_canal"];
$proxima_fecha = $_POST["contacto_prox_fec"];
$comentario = $_POST["comentario"];
$fecha_actual = date("Ymd");
$proxima_fecha1 = explode("/", $proxima_fecha);
$proxima_fecha = $proxima_fecha1[2].$proxima_fecha1[1].$proxima_fecha1[0];

$consulta = $base->query("INSERT INTO `contacto` (`CONTACTO_id`, `PERSONAS_id_fk`, `CANALES_id_fk`, `CONTACTO_fecha_actual`, `CONTACTO_fecha_proxima`, `CONTACTO_comentario`) ".
						" VALUES (NULL, '$id_persona', '$id_canal', '$fecha_actual', '$proxima_fecha', '$comentario')");

if(!$consulta){
    die("Error");

}
else{
		$url_dest = "menu.php";
}
mysqli_close($base);
Header ("Location: ".$url_dest);
?>
