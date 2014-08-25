<?php
$titulo="Lista Empleados";

$consulta = new Consulta("select * from empleados where id_empresa='1' order by id");

$respuesta = $consulta->retorna_resultado();

view('lista_empleados', compact('titulo','respuesta'));