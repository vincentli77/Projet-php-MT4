<?php
require './../vendor/autoload.php';
// include PATH_TEMPLATE  . "home.php";

// (new \App\Core\Route\Router())->getRoutesFromAnnotations('./../src/Controller')->run();
(new \App\Core\Route\Router('./../config/routes.yaml'))->run();

// $p = $_SERVER["REQUEST_URI"];
// $d = str_replace('?' . $_SERVER['QUERY_STRING'], '', $p);
// var_dump($d);


// $path = explode('/', $_SERVER["REQUEST_URI"])[1] !== '' ? explode('/', $_SERVER["REQUEST_URI"])[1] : '/';

// switch ($path) {
//    case "/" :
//        $controller = new \App\Controller\PostController();
//        $controller->getHome();
//        break;
//     case "dashboard" :
//         $controller = new \App\Controller\UserController();
//         $controller->getHome();
//         break;
//    case "show" :
//        $controller = new \App\Controller\PostController();
//        $controller->show();
//        break;
//    default :
//        echo 'rien trouvé';
// }





