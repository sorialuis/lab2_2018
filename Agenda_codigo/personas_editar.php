<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Persona</title>
</head>

<body>
    <section>
<?php
require_once 'configuracionBD.php';

$personas_id = $_GET["personas_id"];
$sql = "SELECT * FROM `personas` WHERE `PERSONAS_id` = '".$personas_id."'";
$consulta = $base->query($sql);
$consulta2 = $base->query('SELECT * FROM `paises`');

if(!$consulta){
    die("Error");
}else{
    $fila = $consulta->fetch_row();
?>
<form action = 'personas_actualizado.php' method= 'post' name= 'ingreso'>
	<input id= 'id_numero' name= 'id' type='hidden' value= '<?php echo $personas_id; ?>'>
	
	<table align="center" width="50%" border="0" cellspacing="5" cellpadding="5">
	<tr> 
		<td colspan="2" align="center"><h1 id="Titulo">Nueva Persona</h1></td>
	</tr>
	<tr>
		<td width="20%"><label id='id_apellido_persona'>Apellido</td> 
		<td width="80%"><input id='id_apellido' name='apellido' type='text' value= '<?php echo $fila[1]; ?>' required></td>
		</label>
	</tr>
	<tr>
		<td width="20%"><label id='id_nombre_persona'>Nombre</td> 
		<td width="80%"><input id='id_nombre' name='nombre' type='text'  value= '<?php echo $fila[2]; ?>' required></td>
		</label>
	</tr>
	<tr>
		<td width="20%"><label id='id_dni_persona'>DNI</td> 
		<td width="80%"><input id='id_dni' name='dni' type='number' class ='validate' value= '<?php echo $fila[3]; ?>' required></td>
		</label>
	</tr>
	<tr>
		<td width="20%"><label id='id_mail_persona'>Mail</td> 
		<td width="80%"><input id='id_mail' name='mail' type='text' value= '<?php echo $fila[4]; ?>' required></td>
		</label>
	</tr>
	<tr>
		<td width="20%"><label id='id_telefono_persona'>Telefono</td> 
		<td width="80%"><input id='id_telefono' name='telefono' type='number' class='validate' value= '<?php echo $fila[5]; ?>' required></td>
		</label>
	</tr>
	<tr>
		<td width="20%"><label id='id_pais_persona'>País    
        <td width="80%"><select name = "pais" required>
 <?php
			while($fila2 = $consulta2->fetch_row()){
				if($fila2[0] == $fila[6]){
		        	echo "<option value =$fila2[0] selected>$fila2[1]</option>"; 
				}
				echo "<option value =$fila2[0]>$fila2[1]</option>";
			}
?>
				</select></td>
		</label>
		<tr>
			<td align="right"><input id='id_enviar' name='Opcion' type='submit' value='Actualizar'></td>
			<td align="left"><input id='id_eliminar' name='Opcion' type='submit' value='Eliminar'></td>
		</tr>
	</table>
        </form>
</form>
<?php
}
mysqli_free_result($consulta);
mysqli_close($base);

?>
  