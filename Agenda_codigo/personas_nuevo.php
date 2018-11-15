<?php


require 'configuracionBD.php';

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["dni"];
$mail = $_POST["mail"];
$telefono = $_POST["telefono"];
$pais = $_POST["pais"];

$consulta = $base->query("INSERT INTO `personas` (`PERSONAS_id`, `PERSONAS_apellidos`, `PERSONAS_nombres`, `PERSONAS_dni`, `PERSONAS_email`, `PERSONAS_telefono`, `PAISES_id_fk`) ".
						" VALUES (NULL, '$apellido', '$nombre', '$dni', '$mail', '$telefono', '$pais')");

if(!$consulta){
    die("Error");

}
else{
		$url_dest = "menu.php";
}
mysqli_close($base);
Header ("Location: ".$url_dest);
?>
     


