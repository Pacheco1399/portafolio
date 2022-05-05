<?php

use League\Route\Router;
use League\Route\RouteGroup;
use App\Controller\AdminController;
use App\Controller\LandingController;

//Controlador de las rutas Esta nos permitiran redirigirnos a los diferentes clases de nuestro proyecto
return function (Router $router): void {

    $router->get('/perfil', [LandingController::class, 'index']);

};
