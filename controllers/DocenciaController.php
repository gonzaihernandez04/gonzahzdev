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
        $router->render("docencia/opiniones",[
            "titulo"=>"Opiniones 👨🏻‍🏫"
        ]);
    }


    public static function crear(Router $router){


        if($_SERVER["REQUEST_METHOD"] == "POST"){

        }

        $router->render("docencia/crear_opinion",[
            "titulo"=>"Crear Opinion 👨🏻‍🎓👩🏻‍🎓"
        ]);
    }

    


  
}