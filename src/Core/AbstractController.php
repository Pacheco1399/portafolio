<?php

use League\Plates\Engine;
use Psr\Http\Message\ResponseInterface;
use Nyholm\Psr7\Response;


abstract class AbstractController
{
    public function __construct(
        protected Engine $template,
    )
    {
    }

    public function render(
        string $templateName,
        array $data = [],
        int $statusCode = 200,
        array $headers = [],
    ): ResponseInterface {
        $body = $this->template->render($templateName, $data);
        return new Response($statusCode,$headers, $body);
    }

    public function json(
        mixed $content,
        int $statusCode = 200,
        array $headers = [],
        bool $rawContent = false,
        bool $pretty = true,
    ){
        $headers = ['Content-Type' => 'application/json; charset=utf-8'] +$headers;

        if (!$rawContent){
            $content=[
                'statusCode' => $statusCode,
                'data' =>$content,
            ];
        }

        $body = json_encode($content, $pretty ? JSON_PRETTY_PRINT:0);

        return new Response($statusCode, $headers, $body);

    }

    public function redirect(
        string $destination,
        int $statusCode = 302,
        array $headers = [],
    ){
        $headers = ['location' => $destination] + $headers;

        $body = "Redirigiendo a tu siguiente destino <a href=\"{$destination}\">aquí</a>.";

        return new Response($statusCode, $headers, $body);

    }
}