<?php
require_once "BritController.php";

class BritImageController extends BritController {
    public $template = "brit_image.twig";

    public function getContext(): array
    {
        $context = parent::getContext();

        return $context;
    }
}