<?php
$titulo="Ingresar Datos";

$consulta= new Consulta("Select id,nombre from empresa order by id");

$empresas= $consulta->retorna_resultado();

view('ingresar_datos', compact('titulo','empresas'));