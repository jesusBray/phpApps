<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
<h4>
    <?php echo $titulo;?>
</h4>
    <form id="acount" name="acount" method="post" action="<?php echo base_url();?>index.php/datos/registrar">
        Nombre <input name="nombre", type="text"/> <br />
        Apellido <input name="apellido", type="text"/> <br />
        Ci <input name="ci", type="text"/> <br />
        Telefono <input name="telefono", type="text"/> <br />
        Email <input name="email", type="text"/> <br />
        Password <input name="password", type="password"/> <br />
        <input type="submit" value="registrar"/>
    </form>
</body>
</html>
