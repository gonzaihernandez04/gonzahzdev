<?php

require __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\IndexController;
use Controllers\TitulosController;
use Controllers\EstudiosController;
use Controllers\ProyectosController;
use Controllers\ExperienciaController;
use Controllers\TecnologiasController;

$router = new Router();

$router->get("/",[IndexController::class,"index"]);
$router->get("/experiencia",[ExperienciaController::class,"index"]);
$router->get("/estudios",[EstudiosController::class,"index"]);
$router->get("/titulos",[TitulosController::class,"index"]);


// Proyectos

$router->get('/proyectos',[ProyectosController::class,"index"]);


// Tecnologias
$router->get('/tecnologias',[TecnologiasController::class,"index"]);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();

