<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nueva Persona</title>

</head>

<body>
    <section>

        <form action="personas_nuevo.php" method="post" name="ingreso">
			<table align="center" width="50%" border="0" cellspacing="5" cellpadding="5">
			<tr> 
				<td colspan="2" align="center"><h1 id="Titulo">Nueva Persona</h1></td>
	        </tr>					
	        <tr> 
				<td width="20%"><label id="id_nombre_persona">Nombre</td>
				<td width="80%"><input name="nombre" type="text" id="id_nombre" size="50" required></td>
				</label>
	        </tr>
	        <tr> 
				<td width="20%"><label id="id_apellido_persona">Apellido</td>
				<td width="80%"><input id="id_apellido" name="apellido" type="text" size="50" required></td>
				</label>
	        </tr>
	        <tr> 
				<td width="20%"><label id="id_dni_persona">DNI</td>
				<td width="80%"><input id="id_dni" name="dni" type="number" class ="validate" required></td>
				</label>
	        </tr>
	        <tr> 
				<td width="20%"><label id="id_mail_persona">Mail</td>
				<td width="80%"><input id="id_mail" name="mail" type="text" size="50" required></td>
				</label>
	        </tr>
	        <tr> 
				<td width="20%"><label id="id_telefono_persona">Telefono</td>
				<td width="80%"><input id="id_telefono" name="telefono" type="number" class="validate" required></td>
				</label>
	        </tr>
	        <tr> 
				<td width="20%"><label id="id_pais_persona">País</td>
		        <td width="80%"><select name = "pais" required>
				<?php
               require 'configuracionBD.php';               
               $consulta = $base->query('SELECT * FROM `paises`');        
                while($fila = $consulta->fetch_row()){
                    echo "<option value =$fila[0]>$fila[1]</option>";             
                }
                ?>
				</select></td>
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