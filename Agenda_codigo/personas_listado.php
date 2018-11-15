<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado Persona</title>
</head>

<body>

<?php
require_once 'configuracionBD.php';
$consulta = $base->query('SELECT * FROM `personas`');

$paises = $base->query("SELECT `PAISES_nombre` FROM `personas`,`paises` WHERE `PAISES_id_fk` = `PAISES_id`");

?>
	<table align="center" width="90%" border="1" cellspacing="1" cellpadding="1">
		<tr> 
			<td colspan="6" align="center"><h1 id="Titulo">Listado de Personas</h1></td>
		</tr>					
		<tr> 
			<td align="center">Apellido</td>
			<td align="center">Nombre</td>
			<td align="center">DNI</td>
			<td align="center">Email</td>
			<td align="center">Teléfono</td>
			<td align="center">País</td>
        </tr>					
<?php
//echo $consulta->num_rows;
	while($fila = $consulta->fetch_row()) {
?>
		<tr> 
			<td align="left"><a href='personas_editar.php?personas_id=<?php echo $fila[0]; ?>'><?php echo $fila[1]; ?></a></td>
			<td align="left"><?php echo $fila[2]; ?></td>
			<td align="center"><?php echo $fila[3]; ?></td>
			<td align="left"><?php echo $fila[4]; ?></td>
			<td align="center"><?php echo $fila[5]; ?></td>
			<td align="left"><?php $filapaises = $paises->fetch_row(); echo $filapaises[0]; ?></td>
<?php ?></td> 
        </tr>					
<?php
	}
?>
	</table>
</body>
</html>
