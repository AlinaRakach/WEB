<?php
require_once "BaseBreedsTwigController.php";

class ScotInfoController extends ScotController {
    public $template = "scot_info.twig";
    
    public function getContext(): array
    {
        $context = parent::getContext(); 

        $context['is_info'] = true;

        return $context;
    }
}