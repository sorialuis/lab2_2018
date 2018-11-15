<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Contacto</title>

</head>

<body>
    <section>

        <form action="contactos_nuevo.php" method="post" name="ingreso">
			<table align="center" width="50%" border="0" cellspacing="5" cellpadding="5">
			<tr> 
				<td colspan="2" align="center"><h1 id="Titulo">Nuevo Contacto</h1></td>
	        </tr>					
	        <tr> 
				<td width="20%"><label id="id_contacto_persona">Persona</td>
		        <td width="80%"><select name = "contacto_persona" required>
        			<?php 
						require 'configuracionBD.php';               
						$consulta = $base->query('SELECT PERSONAS_id, PERSONAS_apellidos, PERSONAS_nombres FROM `personas`');        
						while($fila = $consulta->fetch_row()){
							echo "<option value =$fila[0]>$fila[1], $fila[2]</option>";
						}
					?>
				</select></td>
				</label>
	        </tr>
	        <tr> 
				<td width="20%"><label id="id_contacto_canal">Canal</td>
		        <td width="80%"><select name = "contacto_canal" required>
        			<?php 
						require 'configuracionBD.php';               
						$consulta = $base->query('SELECT CANALES_id, CANALES_nombre FROM `canales`');        
						while($fila = $consulta->fetch_row()){
							echo "<option value =$fila[0]>$fila[1]</option>";
						}
					?>
				</select></td>
				</label>
	        </tr>

	        <tr> 
				<td width="20%">Proximo Contacto</td>
				<td width="80%"><input name="contacto_prox_fec" type="text" id="id_contacto_prox_fec" size="20" required></td>
	        </tr>
	        <tr> 
				<td width="20%">Comentario</td>
				<td width="80%"><textarea name="comentario" row="40" cols="40" maxlenght="400"></textarea></td>
				</label>
	        </tr>
			<tr>
				<td align="center"><input id="id_enviar" name="enviar" type="submit" value="Enviar"></td>
			</tr>
			</table>
        </form>
    </section>
</body> 
</html>