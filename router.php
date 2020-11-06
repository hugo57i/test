<?php

use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use App\Controllers\HomeController;
use App\Controllers\UserController;
use Slim\App;

return function(App $app){

    $app->get('/', HomeController::class . ":home");
    $app->group('/users', function(Group $group){
          $group->get('/login', UserController::class . ":login");
          $group->post('/register', UserController::class . ":register");
    });

};

