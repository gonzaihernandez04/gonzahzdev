<?php

require __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\BlogController;
use Controllers\AdminController;
use Controllers\IndexController;
use Controllers\TitulosController;
use Controllers\DocenciaController;
use Controllers\EstudiosController;
use Controllers\ProyectosController;
use Controllers\ExperienciaController;
use Controllers\TecnologiasController;
use Controllers\ApiTecnologiasController;
use Controllers\ApiUniversidadesController;

$router = new Router();

$router->get("/",[IndexController::class,"index"]);
$router->get("/experiencia",[ExperienciaController::class,"index"]);
$router->get("/estudios",[EstudiosController::class,"index"]);
$router->get("/titulos",[TitulosController::class,"index"]);


// Proyectos

$router->get('/proyectos',[ProyectosController::class,"index"]);


// Tecnologias
$router->get('/tecnologias',[TecnologiasController::class,"index"]);


//Docencia. No creo controlador ya que solo es para mostrar contenido
$router->get('/docencia',[DocenciaController::class,"index"]);

$router->get('/docencia/opiniones',[DocenciaController::class,"opiniones"]);


$router->get('/docencia/opiniones/crear',[DocenciaController::class,"crear"]);
$router->post('/docencia/opiniones/crear',[DocenciaController::class,"crear"]);



// BLOG
$router->get('/blog',[BlogController::class,"index"]);


$router->get('/blog/publicacion',[BlogController::class,"verPublicacion"]);


//Crear publicacion

$router->get('/blog_manager/crear',[BlogController::class,"crear"]);
$router->post('/blog_manager/crear',[BlogController::class,"crear"]);

$router->get('/blog_manager/eliminar',[BlogController::class,"eliminar"]);




//ADMIN

$router->get('/admin/validar',[AdminController::class,"validar"]);
$router->post('/admin/validar',[AdminController::class,"validar"]);



// Contacto

$router->get('/contacto',[IndexController::class, "contacto"]);



//API


$router->get('/api/tecnologias',[ApiTecnologiasController::class,"getTech"]);

$router->get('/api/universidades',[ApiUniversidadesController::class,"getUniversity"]);



// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();

