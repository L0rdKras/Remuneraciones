<?php
if(isset($mensaje) && !empty($mensaje))
{
    echo $mensaje;
}
?>

<h1><?= $titulo?></h1>

<form action="guardar_item" method="post">
    <p>
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre">
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
        <label for="fijo">Valor Fijo</label>
        <select name="fijo" id="fijo">
            <option value="0">NO</option>
            <option value="1">SI</option>
        </select>
    </p>
    <p>
        <label for="valor">Valor(de ser fijo)</label>
        <input type="text" name="valor" id="valor"/>
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