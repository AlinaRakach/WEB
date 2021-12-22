<?php

require_once "../vendor/autoload.php";
require_once "../controllers/MainController.php";
require_once "../controllers/BritController.php";
require_once "../controllers/BritImageController.php";
require_once "../controllers/BritInfoController.php";
require_once "../controllers/ScotController.php";
require_once "../controllers/ScotImageController.php";
require_once "../controllers/ScotInfoController.php";
require_once "../controllers/Controller404.php";

$loader = new \Twig\Loader\FilesystemLoader('../views');

$twig = new \Twig\Environment($loader);

$url = $_SERVER["REQUEST_URI"];


$context = [];

$controller = new Controller404($twig);

$pdo = new PDO("mysql:host=localhost;dbname=cat_breeds;charset=utf8", "root","");

if ($url == "/") {
    $controller = new MainController($twig);
} elseif (preg_match("#/brit#", $url)) {
    $controller = new BritController($twig);
    if (preg_match("#/brit/image#", $url)) {
        $controller = new BritImageController($twig);
    } else if (preg_match("#/brit/info#", $url)) {
        $controller = new BritInfoController($twig);
    } 
} elseif (preg_match("#/scot#", $url)) {
    $controller = new ScotController($twig);
    if (preg_match("#/scot/image#", $url)) {
        $controller = new ScotImageController($twig);
    } else if (preg_match("#/scot/info#", $url)) {
        $controller = new ScotInfoController($twig);
    } 
}


if ($controller) {
    $controller->setPDO($pdo);
    $controller->get();
}
