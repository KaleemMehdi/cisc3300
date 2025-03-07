<?php

namespace app;

require "../inclass15/Controllers/Controller.php";

use inclass15\Controllers\UserController;

class Router
{

    public function handleRoutes()
    {

        $request_uri = $_SERVER["REQUEST_URI"];
        $uri = strtok($_SERVER["REQUEST_URI"], '?');

        $uriArray = explode("/", $uri);

        if ($uriArray[1] === 'posts' && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $userController = new UserController();
            $userController->getUsers();
    }




    }
}

$router = new Router();
$router->handleRoutes();
