<?php
require_once "BaseBreedsTwigController.php";

class BritController extends BaseBreedsTwigController
{
    public $title = "Британская кошка";
    public $template = "__object.twig";

    public function getContext(): array
    {
        $context = parent::getContext();
        $context['image_url'] = "/brit/image";
        $context['info_url'] = "/brit/info";

        return $context;
    }
}