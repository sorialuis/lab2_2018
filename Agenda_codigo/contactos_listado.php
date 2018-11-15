<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado Contactos</title>
</head>

<body>

<?php
require_once 'configuracionBD.php';
$consulta = $base->query('SELECT * FROM `contacto`');

$personas = $base->query("SELECT `PERSONAS_apellidos`, `PERSONAS_nombres` FROM `personas`,`contacto` WHERE `PERSONAS_id_fk` = `PERSONAS_id`");
$canales = $base->query("SELECT `CANALES_nombre` FROM `canales`,`contacto` WHERE `CANALES_id_fk` = `CANALES_id`");
?>
	<table align="center" width="90%" border="1" cellspacing="1" cellpadding="1">
		<tr> 
			<td colspan="6" align="center"><h1 id="Titulo">Listado de Contactos</h1></td>
		</tr>					
		<tr> 
			<td align="center">Apellido, Nombre</td>
			<td align="center">Canal</td>
			<td align="center">Fecha Ultimo Contacto</td>
			<td align="center">Fecha Proximo Contacto</td>
			<td align="center">Comentario</td>
        </tr>					
<?php
	while($fila = $consulta->fetch_row()) {
	$filapersonas = $personas->fetch_row();
	$fecha1 = $fila[3];
	$dia = substr($fecha1,6,2); $mes = substr($fecha1,4,2); $ano = substr($fecha1,0,4);
  	$fecha1 = $dia."/".$mes."/".$ano;
	$fecha2 = $fila[4];
	$dia = substr($fecha2,6,2); $mes = substr($fecha2,4,2); $ano = substr($fecha2,0,4);
  	$fecha2 = $dia."/".$mes."/".$ano;

	
?>
		<tr> 
			<td align="left"><?php echo $filapersonas[0].', '.$filapersonas[1]; ?></td>
			<td align="left"><?php $filacanales = $canales->fetch_row(); echo $filacanales[0]; ?></td>
			<td align="center"><?php echo $fecha1; ?></td>
			<td align="center"><?php echo $fecha2; ?></td>
			<td align="left"><?php echo $fila[5]; ?></td>
        </tr>					
<?php
	}
?>
	</table>
</body>
</html>
