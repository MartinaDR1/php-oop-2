<?php

include_once __DIR__ .'/Computer.php';

class Laptop extends Computer
{
    function __construct(public string $brand, public string $model, public string $image, public string $motherboard, public string $CPU, public string $GPU, public string $memory, public string $battery, public string $touchpad)
    {
        parent::__construct($brand, $model, $image, $motherboard, $CPU, $GPU, $memory);
        $this->battery = $battery;
        $this->touchpad = $touchpad;
    }

    public function getType()
    {
        return "Laptop";
    }

}

?>