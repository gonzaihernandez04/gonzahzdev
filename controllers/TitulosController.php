<?php
namespace Controllers;

use MVC\Router;
use Model\Titulo;

class TitulosController{
    public static function index(Router $router){
        $titulos = Titulo::all("ASC");
       
        $router->render("titulos/index",[
            "titulo" => "Titulos y certificaciones 📑",
            "titulos" => $titulos
        ]);

    }
}