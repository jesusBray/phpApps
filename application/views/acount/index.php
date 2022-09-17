<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Welcome to acount</title>
</head>
<body>
	<h3>Users</h3>
	<table class="table table-bordered"> 
		<thead> 
			<tr>
				
				<th>Nombre</th> 
				<th>Apellido</th> 
				<th>Ci</th> 
				<th>Telefono</th> 
				<th>Email</th> 				
			</tr> 
		</thead> 

        <tbody> 
	        <?php 
                foreach($ress as $row){
            ?>
            	<tr> 
					
            		<td><?php echo $row->nombre; ?></td> 
					<td><?php echo $row->apellido ?></td>
					<td><?php echo $row->ci ?></td>
            		<td><?php echo $row->telefono ?></td>
            		<td><?php echo $row->email ?></td> 
					<td><a class="btn btn-warning" href="<?php echo base_url('acount/edit/'.$row->id)?>" role="button">Editar</a></td>
					<td><a class="btn btn-danger" href="<?php echo base_url('acount/delete/'.$row->id)?>" role="button">Eliminar</a></td>

            	</tr> 
			<?php 
				} 
			?>
        </tbody>
    </table>


	<!-- <input type="submit" value="Adicionar"/> -->


</body>
</html>
