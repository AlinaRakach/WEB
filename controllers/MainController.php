<?php
//require_once "TwigBaseController.php"; 

class MainController extends TwigBaseController {
    public $template = "main.twig";
    public $title = "Главная";

    public function getContext(): array
    {
        $context = parent::getContext();
        
        $query = $this->pdo->query("SELECT * FROM cat_breeds");
        
        $context['cat_breeds'] = $query->fetchAll();

        return $context;
    }
}