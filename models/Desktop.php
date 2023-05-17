<?php

include_once __DIR__ .'/Computer.php';

class Desktop extends Computer 
{
    
    function __construct(public string $brand, public string $model,  public string $image, public string $motherboard, public string $CPU, public string $GPU, public string $memory)
    {
        parent::__construct($brand, $model, $image, $motherboard, $CPU, $GPU, $memory);
        $this->keyboard = $keyboard;
        $this->monitor = $monitor;
    }

    public function getType(){
        return "Desktop";
    }
}

?>