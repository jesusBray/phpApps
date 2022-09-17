<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Welcome</title>
</head>
<body>
	<h3>Users</h3>
	<table class="table table-bordered"> 
		<thead> 
			<tr>
				<th>Id</th> 
				<th>Placa</th> 
				<th>Tipo</th> 	
			</tr> 
		</thead> 

        <tbody> 
	        <?php 
                foreach($ress as $row){
            ?>
            	<tr> 
					
            		<td><?php echo $row->id; ?></td> 
					<td><?php echo $row->placa ?></td>
					<td><?php echo $row->tipo ?></td>
					<td><a class="btn btn-warning" href="<?php echo base_url('auto/form/'.$row->id)?>" role="button">Editar</a></td>
					<!-- <td><a class="btn btn-danger" href="<?php echo base_url('autodelete/'.$row->id)?>" role="button">Eliminar</a></td> -->
                    <td><a class="btn btn-danger" href="<?php echo base_url('auto/delete/'.$row->id)?>" role="button">Eliminar</a></td>

            	</tr> 
			<?php 
				} 
			?>
        </tbody>
    </table>
    <a class="btn btn-primary" href="<?php echo base_url('auto/form/new')?>" role="button">Nuevo</a>
</body>
</html>
