<?php
require_once "ScotController.php";

class ScotImageController extends ScotController {
    public $template = "scot_image.twig";

    public function getContext(): array
    {
        $context = parent::getContext();

        return $context;
    }
}