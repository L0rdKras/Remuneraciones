<?php
$titulo="Crear Items";

$consulta= new Consulta("Select id,nombre from empresa order by id");

$empresas= $consulta->retorna_resultado();

view('crear_item', compact('titulo','empresas'));