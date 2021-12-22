<?php
require_once "ScotController.php";

class ScotInfoController extends ScotController {
    public $template = "scot_info.twig";
    
    public function getContext(): array
    {
        $context = parent::getContext(); 

        

        return $context;
    }
}