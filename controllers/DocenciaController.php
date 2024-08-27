<?php

namespace Controllers;

use MVC\Router;
use Model\Opinion;
use Model\Persona;



class DocenciaController
{
    public static function index(Router $router)
    {
        $router->render("docencia/index", [
            "titulo" => "Docencia 👨🏻‍🏫",
            "isHeaderVisible"=>true

        ]);
    }

    public static function opiniones(Router $router)
    {
        $opiniones = Opinion::all("DESC");
        $personas_assoc = [];
        $personas = Persona::all("ASC");
        foreach ($personas as $persona) {
            # code...
            $personas_assoc[$persona->id] = [
                'nombre'=> $persona->nombre,
                'apellido'=>$persona->apellido,
                'email'=>$persona->email
            ];
        }


        foreach($opiniones as $opinion){
            $opinion->persona = $personas_assoc[$opinion->idPersona];
        }

    


        $router->render("docencia/opiniones", [
            "titulo" => "Opiniones 👨🏻‍🏫",
            "opiniones" => $opiniones,
            "isHeaderVisible"=>true

        ]);
    }


    public static function crear(Router $router): void
    {

        $alertas = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

          
            if (!empty($_POST['estrellas']) && $_POST['estrellas']>=1) {
                $persona = new Persona($_POST);
                $alertas = $persona->validarCampos();

                if (empty($alertas)) {
                    $persona->eliminarPuntos();
                    $personaVerificada = Persona::where('email', $persona->email);
                    if (!$personaVerificada) {

                        $persona->guardar();
                        $personaId = Persona::getId('email', $persona->email);

                        $opinion = new Opinion($personaId, (string)sanitizar($_POST['estrellas']), sanitizar($_POST['comentario']));
                            


                        $opinion->guardar();
                    }
                } else {
                    Opinion::setAlerta("error", "Ya existe una opinion escrita por este email");
                }
            } else {
                Opinion::setAlerta("error", "La puntuacion es obligatoria");
            }
            $alertas = Opinion::getAlertas();
        }

       

        $router->render("docencia/crear_opinion", [
            "titulo" => "Crear Opinion 👨🏻‍🎓👩🏻‍🎓",
            "alertas" =>$alertas,
            "isHeaderVisible"=>true

        ]);
    }
}
