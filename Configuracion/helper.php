<?php

function view($template, $vars = array())
{
    extract($vars);
    ob_start();
    require "../Vistas/$template.tpl.php";

    $contenido_web = ob_get_clean();

    require "../Vistas/plantilla.tpl.php";
}
function controller($arreglo,$arreglo_post)
{
    $name=$arreglo['url'];
    if (empty($name))
    {
        $name = 'home';
    }
    $file = "../Controladores/$name.php";
    if (file_exists($file))
    {
        require $file;
    }
    else
    {
        header("HTTP/1.0 404 Not Found");
        exit("Pagina no encontrada");
    }
}