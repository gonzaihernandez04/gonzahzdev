<?php
namespace Controllers;
use MVC\Router;
use Model\Publicacion;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;



class BlogController{

    public static function index(Router $router){
        $publicaciones = Publicacion::all();
        $router->render("blog/index",[
            "titulo" => "Blog 📖",
            "isHeaderVisible"=>false,
            "publicaciones"=>$publicaciones
        ]);
    }


    public static function crear(Router $router){
        session_start();
        if(empty($_SESSION["admin"])){
            header("Location: /admin/validar");
         
        }else{

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $date = date('Y-m-d H:i:s');
                $fechaYHora = explode(" ",$date);
                $_POST["fecha"] = $fechaYHora[0];
                $_POST["hora"] = $fechaYHora[1];

                
                if(isset($_FILES["imagen"])){
                    $filePath = $_FILES["imagen"]["tmp_name"];
                    $manager = new ImageManager(Driver::class);
                    $image = $manager->read($filePath);
                    $image->resize(1400,700);
                    $image->gamma(1);
                    $destinationPath = __DIR__ . "/../src/img/publicaciones";
                    if(!is_dir($destinationPath)){
                        mkdir($destinationPath,0777,true);


                    }
                    $image->save($destinationPath."/".$_FILES["imagen"]["name"]);

                    
                }
                $_POST["imagen"] = $_FILES["imagen"]["name"];

                $publicacion = new Publicacion($_POST);
                $publicacion->guardar();

                header("Location: /blog");
                exit;
                

                
            }
        }
        $router->render("blog/crear",[
            "titulo" => "Crear publicacion 📖",
            "isHeaderVisible"=>false
        ]);
    }

    public static function verPublicacion(Router $router){
        
        $id = unhashData($_GET["id"]);
        if(!$id) header("Location: /blog");

        $publicacion = Publicacion::find($id);
      
        
        $router->render("blog/publicacion",[
            "publicacion" => $publicacion,
            "titulo" => $publicacion->titulo,
            "isHeaderVisible"=>false,
            
        ]);
    }
}