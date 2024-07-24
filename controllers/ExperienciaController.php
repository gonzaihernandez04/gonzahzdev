<?php
namespace Controllers;
use MVC\Router;
use Model\Experiencia;

class ExperienciaController{

    public static function index(Router $router){
        $experiencias = Experiencia::allXCol("DESC","fechaInicio");
        
        $router->render('experiencia/index',[
            'titulo'=>"Experiencia",
            'experiencias' =>$experiencias ?? []
        ]);
    }


}