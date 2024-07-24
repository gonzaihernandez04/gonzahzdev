<?php
namespace Controllers;
use MVC\Router;
use Model\Titulo;
use Model\Estudio;


class EstudiosController{
    public static function index(Router $router){
       $controller = new self();
        $estudios = $controller->devolverEstudiosTitulo();
       
        $router->render("estudios/index",[
            "titulo"=>"Estudios",
            "estudios"=>$estudios
        ]);
    }


    public function devolverEstudiosTitulo() : array{
        $titulos = Titulo::all("ASC");
        $titulos_assoc = [];
     
        //Garantiza O(n)
        foreach ($titulos as $key => $titulo) {
            $titulos_assoc[$titulo->id] = $titulo;
        }
        $estudios = Estudio::all("ASC");
        foreach($estudios as $estudio){
            if(isset($titulos_assoc[$estudio->id])){
                $estudio->titulo = $titulos_assoc[$estudio->id]->nombre;
                $estudio->duracion = $titulos_assoc[$estudio->id]->duracion;
                $estudio->fecha = $titulos_assoc[$estudio->id]->fecha;
            }
        }
        return $estudios;

    }
}