<?php

namespace Controllers;

use MVC\Router;

class TecnologiasController{
    public static function index(Router $router){



        $router->render("tecnologias/index",[
            "titulo" => "Tecnologias"
        ]);
    }
}