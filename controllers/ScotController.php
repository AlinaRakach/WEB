<?php
require_once "BaseBreedsTwigController.php";

class ScotController extends BaseBreedsTwigController{
    public $title = "Шотландская кошка";
    public $template = "__object.twig";

    public function getContext(): array
    {
        $context = parent::getContext();

        $context['image_url'] = "/scot/image";
        $context['info_url'] = "/scot/info";

        return $context;
    }
}