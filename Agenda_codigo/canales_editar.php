<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Canales</title>
</head>

<?php
require_once 'configuracionBD.php';

$canales_id = $_GET["canal_id"];
$sql = "SELECT `CANALES_nombre` FROM `canales` WHERE `CANALES_id` = '".$canales_id."'";
$consulta = $base->query($sql);

if (!$consulta) {
    die("Error");
} 
else {
    $fila = $consulta->fetch_row();
}
?>

	<form action = 'canales_actualizado.php' method= 'post' name= 'ingreso'>
	<input id='id_numero' name='id' type='hidden' value='<?php echo $canales_id; ?>'>
	<table align="center" width="50%" border="0" cellspacing="1" cellpadding="1">
		<tr> 
			<td colspan=2= align="center"><h1 id="Titulo">Baja y Modificación de Canales</h1></td>
		</tr>
		<tr> 
			<td align="center"><label id= 'id_nombre_canal'>Nombre</td>
			<td><input id='id_canal'  name='canal_editado' type='text' value='<?php echo $fila[0]; ?>'></td>
			</label>
		</tr>
		<tr><td></tr></td>
		<tr>
			<td align="right"><input id='id_enviar' name='Opcion' type='submit' value='Actualizar'></td>
			<td align="left"><input id='id_eliminar' name='Opcion' type='submit' value='Eliminar'></td>
		</tr>
	</table>
	</form>

<?php
mysqli_free_result($consulta);
mysqli_close($base);
?>
