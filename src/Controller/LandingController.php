<?php

namespace App\Controller;

use App\Core\AbstractController;
use League\Plates\Engine;
use League\Plates\Extension\Asset;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class LandingController extends AbstractController
{
    public function __construct(
        // Para pasarlo a la clase padre
        Engine                                $templates
    )
    {
        parent::__construct($templates);
    }
    //Vista
    public function error404(): ResponseInterface
    {
        return $this->render('landing/index',
            ['contenido' => '404',
                'title' => 'TuProfe - 404']);
    }

    public function index(): ResponseInterface
    {
        return $this->render('landing/index',
            ['contenido' => 'index',
                'title' => 'index']);
    }
}