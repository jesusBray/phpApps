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
		Nombre <input name="nombre", type="text"/> <br />
		Apellido <input name="apellido", type="text"/> <br />
		Ci <input name="ci", type="text"/> <br />
		Telefono <input name="telefono", type="text"/> <br />
		Email <input name="email", type="text"/> <br />
		Password <input name="password", type="password"/> <br />
	
		<input type="submit" value="Guardar"/>
		<input type="submit" value="Canselar"/>
		</form>
</body>
</html>