<?php
if(isset($mensaje) && !empty($mensaje))
{
    echo $mensaje;
}
?>

<h1><?= $titulo?></h1>

<form action="ver_tabla" method="post">
    <p>
        <label for="empresa">Empresa:</label>
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
        <input type="submit" value="Ver">
    </p>
</form>