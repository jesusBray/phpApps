<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Welcome to autos</title>
</head>
<body>

	<?php  
		if ($ress!="") {
	?>
		<form name="auto" method="post" action="<?=base_url('autoupdate/'.$ress->id)?>">
		Placa <input name="placa", type="text" value="<?php echo $ress->placa?>"/> <br />
		Tipo <input name="tipo", type="text" value="<?php echo $ress->tipo?>"/> <br />
	<?php 
		}else{
	?>
		<form name="auto" method="post" action="<?=base_url('autocreate')?>">
		Placa <input name="placa", type="text"/> <br />
		Tipo <input name="tipo", type="text"/> <br />
	<?php 
		}
	?>	
		<input type="submit" value="Guardar"/>
	</form>
</body>
</html>