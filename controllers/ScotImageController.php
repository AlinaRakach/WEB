<?php
require_once "ScotController.php";

class ScotImageController extends ScotController 
{
    public $template = "image.twig";

    public function getContext(): array
    {
        $context = parent::getContext();

        $context['is_image']= true;
        $context['image'] = "/images/Scot.png";

        return $context;
    }
}