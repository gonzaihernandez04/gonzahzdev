<?php

namespace Controllers;

use MVC\Router;

class AdminController{
    public static function validar(Router $router){
        session_start();

       $esconder = false;
        if(empty($_SESSION)){
            $_SESSION["attemps"] = 0;
            $_SESSION["ultimo_intento"] = null;
           

        }
        if($_SESSION["attemps"]>=3){
            $esconder = true;
            if (isset($_SESSION["last_attempt_time"])) {
                $timeDifference = time() - $_SESSION["last_attempt_time"];
                if ($timeDifference >= 1800) { // 1800 segundos = 30 minutos
                    $_SESSION["attempts"] = 0;
                    $_SESSION["last_attempt_time"] = null;
                }
            }
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $token = filter_input(INPUT_POST, "token", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            if($token == $_ENV["TOKEN_ADMIN"] && $_SESSION["attemps"]<3){
                $_SESSION["admin"] = true;
                header("Location:/blog_manager/crear");
                exit;
            }else{
                $_SESSION["attemps"]++;
                if($_SESSION["attemps"]>=3){
                    $_SESSION["last_attempt_time"] = time();
                }
            }
            
        }
        $router->render("admin/validar",[
            "titulo"=>"Validar",
            "esconder"=>$esconder
        ]);
    }
}