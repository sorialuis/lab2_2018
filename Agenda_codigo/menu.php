 <?php

$links = array(
    "Personas" => array(
        "Nuevo"=>"personas.php",
        "Listado"=>"personas_listado.php"
        ),
    "Canales" => array(
        "Nuevo"=>"canales.php",
        "Listado"=>"canales_listado.php"
        ),
    "Contactos" => array(
        "Nuevo"=>"contactos.php",
        "Listado"=>"contactos_listado.php"
        )
);
$pag_actual1=explode("/",$_SERVER["SCRIPT_NAME"]);
$pag_actual=end($pag_actual1);
?>

<table align="center" width="50%" border="0" cellpadding="1" cellspacing="1" id="menu">
	<tr> 
		<td align="center"><h1 id="Titulo">Menu Principal</h1></td>
	</tr>					
<?php
foreach($links as $titulo => $lista) {
?>
  <tr>
    <td align="center" valign="bottom"><h2><?php echo ucfirst(strtolower($titulo)); ?></h2></td>
  </tr>
  <?php
  foreach($lista as $value => $href) {
  if($pag_actual == $href) $lnk = ucfirst(strtolower($value));
  else $lnk = "<a href='$href'>".ucfirst(strtolower($value))."</a>";
  ?>
  <tr>
    <td align="center"><?php echo $lnk; ?></td>
  </tr>
  <?php
  }
  ?>
<br style="font-size:4px">
<?php
}
?> 
</table>

