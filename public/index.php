<?php

require_once "../vendor/autoload.php";
require_once "../framework/autoload.php";
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

$loader = new \Twig\Loader\FilesystemLoader('../views');
$twig = new \Twig\Environment($loader, [
    "debug" => true
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

$context = [];

$controller = new Controller404($twig);

$pdo = new PDO("mysql:host=localhost;dbname=cat_breeds;charset=utf8", "root", "");

if ($url == "/") {
    $controller = new MainController($twig);
} 


if ($controller) {
    $controller->setPDO($pdo);
    $controller->get();
}
