<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Canal</title>

</head>

<body>
    <section>

        <form action="canales_nuevo.php" method="post" name="ingreso">
			<table align="center" width="50%" border="0" cellspacing="5" cellpadding="5">
			<tr> 
				<td colspan="2" align="center"><h1 id="Titulo">Nuevo Canal</h1></td>
	        </tr>					
	        <tr> 
				<td align="right" width="20%"><label id="id_nombre_canal">Nombre</td>
				<td align="left" width="50%"><input name="canal" type="text" id="id_canal" size="50" required></td>
				</label>
	        </tr>
			<tr>
				<td colspan="2" align="center"><input id="id_enviar" name="enviar" type="submit" value="Enviar"></td>
			</tr>
			</table>
        </form>
    </section>
</body> 
</html>