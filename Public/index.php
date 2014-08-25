<?php

require "../Configuracion/config.php";
require "../Configuracion/helper.php";

require "../Entidades/Consulta.php";
require "../Entidades/OperacionesMySql.php";
require "../Entidades/Empresa.php";
require "../Entidades/Empleado.php";

//Llamar al controlador indicado
controller($_GET,$_POST);