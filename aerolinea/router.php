<?php
require_once 'controller/controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])){
    $action = $_GET['action'];
}
else {
    $action = 'home';
}

$controller = new controller();
$params = explode('/', $action);

switch ($params[0]) {
    case 'home':   
        $controller->home();
        break;
}