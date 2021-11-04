<?php
    require_once('libs/Router.php');
    require_once('controller/api-controller.php');

    $router = new Router();

    $router->addRoute('buscar', 'GET', 'apiController', 'buscarVuelo');
    $router->addRoute('vuelos', 'GET', 'apiController', 'getAll');
    $router->addRoute('vuelos', 'POST', 'apiController', 'insertVuelo');
    $router->setDefaultRoute('controller', 'home');

    $resource = $_GET['resource'];
    $method = $_SERVER['REQUEST_METHOD'];
    $router->route($resource, $method);


