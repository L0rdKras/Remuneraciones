<?php
$mensaje="";
if(isset($arreglo_post['nombre']) && !empty($arreglo_post['nombre']) && isset($arreglo_post['fijo']) && isset($arreglo_post['valor']) && !empty($arreglo_post['valor']) && isset($arreglo_post['empresa']) && !empty($arreglo_post['empresa']))
{
    //guardar
    $operaciones= new OperacionesMySql();
    $orden_guardar="
    insert into
    items(nombre,fijo,id_empresa,valor)
    values
    ('{$arreglo_post['nombre']}','{$arreglo_post['fijo']}','{$arreglo_post['empresa']}','{$arreglo_post['valor']}')";
    if($operaciones->ejecutar($orden_guardar)===TRUE)
    {
        $mensaje="Informacion Guardada";
    }else{
        $mensaje="Ocurrio un error al guardar";
    }
}else{
    //Faltan datos
    $mensaje="Error: Faltan Datos";
}

$titulo="Crear Items";

$consulta= new Consulta("Select id,nombre from empresa order by id");

$empresas= $consulta->retorna_resultado();

view('crear_item', compact('titulo','empresas','mensaje'));