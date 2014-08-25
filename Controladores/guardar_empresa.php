<?php
$mensaje="";
if(isset($arreglo_post['nombre']) && !empty($arreglo_post['nombre']) && isset($arreglo_post['rut']) && !empty($arreglo_post['rut']) && isset($arreglo_post['giro']) && !empty($arreglo_post['giro']) && isset($arreglo_post['direccion']) && !empty($arreglo_post['direccion']) && isset($arreglo_post['fono']) && !empty($arreglo_post['fono']) && isset($arreglo_post['email']) && !empty($arreglo_post['email']))
{
    //guardar
    $operaciones= new OperacionesMySql();
    $orden_guardar="
    insert into
    empresa(rut,nombre,giro,direccion,fono,email)
    values
    ('{$arreglo_post['rut']}','{$arreglo_post['nombre']}','{$arreglo_post['giro']}','{$arreglo_post['direccion']}','{$arreglo_post['fono']}','{$arreglo_post['email']}')";
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

$titulo="Ingresar Empresa";

view('crear_empresa', compact('titulo','mensaje'));