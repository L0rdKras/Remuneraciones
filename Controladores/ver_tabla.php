<?php
$mensaje="";
if(isset($arreglo_post['empresa']) && !empty($arreglo_post['empresa'])){
    $titulo="Tabla Ingreso";
    $la_empresa= new Empresa($arreglo_post['empresa']);
    view('tabla_datos', compact('titulo','la_empresa'));
}else{
    $titulo="Ingresar Datos";

    $consulta= new Consulta("Select id,nombre from empresa order by id");

    $empresas= $consulta->retorna_resultado();
    $mensaje="Debe Seleccionar una Empresa";
    view('ingresar_datos', compact('titulo','empresas'));
}