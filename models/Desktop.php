<?php

include_once __DIR__ .'/Computer.php';
include_once __DIR__ . "/../Traits/Portability.php";

class Desktop extends Computer 
{


    public $keyboard;
    public $monitor;

    function __construct(string $brand, string $model,  string $image, string $keyboard, string $monitor)
    {
        parent::__construct($brand, $model, $image);
        $this->keyboard = $keyboard;
        $this->monitor = $monitor;
    }

    public function getType(){
        return "Desktop";
    }
}

?>