<?php
$titulo="Ingresar Empleados";

$consulta= new Consulta("Select id,nombre from empresa order by id");

$empresas= $consulta->retorna_resultado();

view('crear_empleado', compact('titulo','empresas'));