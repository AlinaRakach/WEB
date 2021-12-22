<?php
require_once "TwigBaseController.php";

class ScotController extends TwigBaseController{
    public $title = "Шотландская кошка";
    public $template = "scot.twig";

    public function getContext(): array
    {
        $context = parent::getContext();


        return $context;
    }
}