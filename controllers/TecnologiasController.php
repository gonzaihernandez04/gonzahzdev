<?php

namespace Controllers;

use MVC\Router;
use Model\Tecnologia;

class TecnologiasController{
    public static function index(Router $router){
       
        $router->render("tecnologias/index",[
            "titulo" => "Tecnologias 🚀",
        ]);
    }
}