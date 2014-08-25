<?php
if(isset($mensaje) && !empty($mensaje))
{
    echo $mensaje;
}
?>

<h1><?= $titulo?></h1>

<form action="index.php?url=guardar_empresa" method="post">
	<p>
		<label for="rut">Rut</label>
		<input type="text" id="rut" name="rut" >
	</p>
	<p>
		<label for="nombre">Nombre</label>
		<input type="text" id="nombre" name="nombre">
	</p>
	<p>
		<label for="giro">Giro</label>
		<input type="text" id="giro" name="giro">
	</p>
	<p>
		<label for="direccion">Direccion</label>
		<input type="text" id="direccion" name="direccion">
	</p>
	<p>
		<label for="fono">Telefono</label>
		<input type="text" id="fono" name="fono">
	</p>
	<p>
		<label for="email">Email</label>
		<input type="email" id="email" name="email">
	</p>
	<p><input type="submit" value="Guardar"></p>
</form>

<script type="text/javascript">
    /*$(document).ready(function(){
        $("#guardar").on('click',function(event){
            event.preventDefault();
            location.href="index.php?url=guardar_empresa";
        });
    });*/
</script>