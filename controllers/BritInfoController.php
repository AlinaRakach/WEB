<?php
require_once "BritController.php";

class BritInfoController extends BritController {
    public $template = "brit_info.twig";
    
    public function getContext(): array
    {
        $context = parent::getContext(); 

        $context['is_info']= true;

        return $context;
    }
}