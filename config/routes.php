<?php declare(strict_types=1);

use League\Route\Router;

use App\Controller\AdminController;

return function (Router $router): void {
    $router->get('/', [AdminController::class, 'index']);
};
