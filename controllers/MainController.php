<?php
require_once "BaseBreedsTwigController.php";

class MainController extends BaseBreedsTwigController {
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