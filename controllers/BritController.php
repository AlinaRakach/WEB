<?php
require_once "TwigBaseController.php";

class BritController extends TwigBaseController{
    public $title = "Британская кошка";
    public $template = "brit.twig";

    public function getContext(): array
    {
        $context = parent::getContext();


        return $context;
    }
}