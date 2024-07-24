<?php
namespace Controllers;
use MVC\Router;



class DocenciaController{
    public static function index(Router $router){
     
       
        $router->render("docencia/index",[
            "titulo"=>"Docencia 👨🏻‍🏫"
        ]);
    }

    public static function opiniones(Router $router){
        $router->render("docencia/index",[
            "titulo"=>"Opiniones 👨🏻‍🏫"
        ]);
    }


  
}