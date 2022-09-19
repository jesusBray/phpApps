<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Welcome to acount</title>
</head>
<body>

<form id="acount" name="acount" method="post" action="<?php echo base_url('acount/registrar');?>">
        Nombre <input name="nombre", type="text"/> <br />
        Apellido <input name="apellido", type="text"/> <br />
        Ci <input name="ci", type="text"/> <br />
        Telefono <input name="telefono", type="text"/> <br />
        Email <input name="email", type="text"/> <br />
        Password <input name="password", type="password"/> <br />
        <input class="btn btn-primary" type="submit" value="registrar"/>
		<a class="btn btn-danger" href="<?php echo base_url('acount')?>" role="button">Cancelar</a>
    </form>
</body>
</html>