<?php declare(strict_types=1);

use League\Route\Router;
use League\Route\RouteGroup;
use App\Controller\AdminController;

//Controlador de las rutas Esta nos permitiran redirigirnos a los diferentes clases de nuestro proyecto
return function (Router $router): void {

    $router->get('/', [AdminController::class, 'index']);

};
