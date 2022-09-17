<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Welcome to autos</title>
</head>
<body>

	<form name="auto" method="post" action="<?=base_url('autocreate')?>">
		Placa <input name="placa", type="text"/> <br />
		Tipo <input name="tipo", type="text"/> <br />
		
		<input type="submit" value="Guardar"/>
	</form>
</body>
</html>