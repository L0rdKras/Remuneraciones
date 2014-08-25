<h1><?= $titulo?></h1>
<h2><?= $la_empresa->nombre_empresa()?></h2>

<table border="1">
    <tr>
        <td></td>
        <?php
        $empleados= $la_empresa->lista_empleados();
        while($row_e=$empleados->fetch_array())
        {
            ?><td><?= $row_e['nombre']?></td><?php
        }
        $empleados->close();
        ?>
    </tr>
    <?php
    $items= $la_empresa->lista_items();
    while($row_i=$items->fetch_array())
    {
    ?>
    <tr>
        <td><?= $row_i['nombre']?></td>
        <?php
        $empleados2=$la_empresa->lista_empleados();
        while($row_e=$empleados2->fetch_array())
        {
            ?><td><input type="text" id="<?= $row_e['id']."-".$row_i['id']?>"/></td><?php
        }
        $empleados2->close();
        ?>
    </tr>
    <?php
    }
    $items->close();
    ?>
</table>