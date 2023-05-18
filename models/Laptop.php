<?php

include_once __DIR__ .'/Computer.php';
include_once __DIR__ . "/../Traits/Portability.php";

class Laptop extends Computer
{


    public $battery;
    public $touchpad;


    function __construct(string $brand, string $model, string $image, string $battery, string $touchpad)
    {
        parent::__construct($brand, $model, $image);
        $this->battery = $battery;
        $this->touchpad = $touchpad;
        
    }

    public function getType()
    {
        return "Laptop";
    }

}

?>