<?php

namespace App\Controller;

use League\Plates\Engine;

class LoginController  extends \AbstractController
{

    public function __construct(
        Engine $templates,
    )
    {
        parent::__construct($templates);
    }

}