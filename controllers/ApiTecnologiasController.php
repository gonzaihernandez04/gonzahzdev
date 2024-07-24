<?php
namespace Controllers;

use Model\Tecnologia;

class ApiTecnologiasController{


    public static function getTech(){
        try {
            $tecnologias = Tecnologia::all("ASC");
            echo json_encode($tecnologias);

        } catch (\Throwable $th) {
            http_response_code(500);
            echo json_encode(['error' => $th->getMessage()]);
        }
    }
}

