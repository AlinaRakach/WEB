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
require_once "../controllers/InfoController.php";
require_once "../controllers/ImageController.php";
require_once "../controllers/BaseBreedsTwigController.php";
require_once "../controllers/ObjectController.php";

$loader = new \Twig\Loader\FilesystemLoader('../views');
$twig = new \Twig\Environment($loader, [
    "debug" => true 
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

$pdo = new PDO("mysql:host=localhost;dbname=cat_breeds;charset=utf8", "root", "");

$router = new Router($twig, $pdo);

$router->add("/", MainController::class);
$router->add("/Brit", BritController::class);
$router->add("/cat-breeds/(?P<id>\d+)", ObjectController::class); 
$router->add("/cat-breeds/(?P<id>\d+)/image", ImageController::class); 
$router->add("/cat-breeds/(?P<id>\d+)/info", InfoController::class); 

$router->get_or_default(Controller404::class);

?>
