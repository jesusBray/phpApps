<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Welcome to acount</title>
</head>
<body>

	<form id="acount" name="acount" method="post" action="<?=base_url('acountupdate/'.$ress->id)?>">
		Nombre <input name="nombre", type="text" value="<?php echo $ress->nombre?>"/> <br />
		Apellido <input name="apellido", type="text" value="<?php echo $ress->apellido?>"/> <br />
		Ci <input name="ci", type="text" value="<?php echo $ress->ci?>"/> <br />
		Telefono <input name="telefono", type="text" value="<?php echo $ress->telefono?>"/> <br />
		Email <input name="email", type="text" value="<?php echo $ress->email?>"/> <br />
		Password <input name="password", type="password" value="<?php echo $ress->password?>"/> <br />
	
		<input class="btn btn-primary" type="submit" value="Guardar"/>
		<a class="btn btn-danger" href="<?php echo base_url('acount')?>" role="button">Cancelar</a>
		</form>
</body>
</html>