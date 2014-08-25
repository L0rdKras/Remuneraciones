<?php
$mensaje="";
if(isset($arreglo_post['nombre']) && !empty($arreglo_post['nombre']) && isset($arreglo_post['rut']) && !empty($arreglo_post['rut']) && isset($arreglo_post['cargo']) && !empty($arreglo_post['cargo']) && isset($arreglo_post['empresa']) && !empty($arreglo_post['empresa']) && isset($arreglo_post['email']) && !empty($arreglo_post['email']))
{
    //guardar
    $operaciones= new OperacionesMySql();
    $orden_guardar="
    insert into
    empleados(rut,nombre,cargo,id_empresa,email)
    values
    ('{$arreglo_post['rut']}','{$arreglo_post['nombre']}','{$arreglo_post['cargo']}','{$arreglo_post['empresa']}','{$arreglo_post['email']}')";
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

$titulo="Ingresar Empleados";

$consulta= new Consulta("Select id,nombre from empresa order by id");

$empresas= $consulta->retorna_resultado();

view('crear_empleado', compact('titulo','mensaje','empresas'));