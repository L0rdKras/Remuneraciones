<?php

$titulo= "Empresas";

$consulta= new Consulta("SELECT * FROM empresa order by id");

$respuesta = $consulta->retorna_resultado();

view('lista_empresas', compact('titulo','respuesta'));