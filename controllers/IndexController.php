<?php

namespace Controllers;
use MVC\Router;
use Model\Experiencia;

class IndexController{
    public static function index(Router $router){
        

        $router->render('index/index',[
            'titulo'=>"Sobre mi 👨🏻‍💻🎸",
            "isHeaderVisible"=>true

        ]);
    }


}