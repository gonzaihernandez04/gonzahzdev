<?php

namespace Controllers;

use MVC\Router;
use Model\Proyecto;


class ProyectosController{
    public static function index(Router $router){

        $proyectos = Proyecto::all("ASC");
        
        $router->render("proyectos/index",[
            "titulo"=>'Proyectos ⌨️',
            "proyectos" => $proyectos
        ]);
    }
}