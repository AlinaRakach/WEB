<?php
require_once "ObjectController.php";
class BaseBreedsTwigController extends TwigBaseController
{
    public function getContext(): array
    {
        $context = parent::getContext();

        $query = $this->pdo->query("SELECT DISTINCT type FROM cat_breeds ORDER BY 1");
        $types = $query->fetchall();
        $context['types'] = $types;

        return $context;
    }
}