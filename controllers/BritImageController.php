<?php
require_once "BritController.php";

class BritImageController extends BritController 
{
    public $template = "image.twig";

    public function getContext(): array
    {
        $context = parent::getContext();

        $context['is_image']= true;
        $context['image'] = "/images/brit.png";

        return $context;
    }
}