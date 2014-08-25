<?php
if(isset($mensaje) && !empty($mensaje))
{
    echo $mensaje;
}
?>

<h1><?= $titulo?></h1>

<form action="index.php?url=guardar_empleado" method="post">
    <p>
        <label for="rut">Rut</label>
        <input type="text" id="rut" name="rut" >
    </p>
    <p>
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre">
    </p>
    <p>
        <label for="cargo">Cargo</label>
        <input type="text" id="cargo" name="cargo">
    </p>
    <p>
        <label for="empresa">Empresa</label>
        <select name="empresa" id="empresa">
            <option value=""></option>
<?php
    while($row=$empresas->fetch_array()){
        ?>
        <option value="<?= $row['id']?>"><?= $row['nombre']?></option>
        <?php
    }
?>
        </select>
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