<?php

$language = "Registro Remuneraciones";
$titulo = 'Remuneraciones';

$menu= array('Inicio'=>'home','Nueva Empresa'=>'crear_empresa','Nuevo Empleado'=>'crear_empleado','Nuevo Item'=>'crear_item','Ingresar Datos'=>'ingresar_datos');
// llamando una funcion
view('home', compact('language', 'titulo','menu'));