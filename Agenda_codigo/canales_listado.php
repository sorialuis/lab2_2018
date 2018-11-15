<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Canales</title>
</head>

<?php

require_once 'configuracionBD.php';
$consulta = $base->query('SELECT * FROM `canales`');
?>
	<table align="center" width="50%" border="1" cellspacing="1" cellpadding="1">
		<tr> 
			<td colspan="2" align="center"><h1 id="Titulo">Listado de Canales</h1></td>
		</tr>					

<?php
			while($fila = $consulta->fetch_row()){
?>
				<tr><td align="center"><a href = 'canales_editar.php?canal_id=<?php echo $fila[0]; ?>'><?php echo $fila[1]; ?></a></tr></td>
<?php
			}
?>
</table>
