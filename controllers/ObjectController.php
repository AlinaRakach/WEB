<?php

require_once "BaseBreedsTwigController.php";

class ObjectController extends BaseBreedsTwigController
{
    public $template = "__object.twig";

    public function getContext(): array
    {
        $context = parent::getContext();

        $query = $this->pdo->prepare("SELECT * FROM cat_breeds WHERE id= :my_id");

        $query->bindValue("my_id", $this->params['id']);
        $query->execute();

        $data = $query->fetch();
        
        $context['object'] = $data;
        $context['description'] = $data['description'];
        $context['image_url'] = '/cat_breeds/'.$data['id'].'/image';
        $context['info_url'] = '/cat_breeds/'.$data['id'].'/info';


        return $context;
    }
}