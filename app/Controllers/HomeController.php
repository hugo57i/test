<?php

namespace App\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController
{

    public function home(Request $request, Response $response, array $args): Response
    {
        $response->getBody()->write("Page d'accueil");
        return $response;
    }

}
