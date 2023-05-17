<?php

include_once __DIR__ .'/Computer.php';

class Desktop extends Computer 
{
    
    function __construct(public string $brand, public string $model, public string $motherboard,  public string $CPU,  public string $GPU,  public string $memory)
    {
        parent::__construct($brand, $model,$motherboard, $CPU, $GPU, $memory);
        $this->keyboard = $keyboard;
        $this->mouse = $mouse;
        $this->monitor = $monitor;
        $this->psu = $psu;
    }

    public function getType(){
        return "Desktop";
    }
}

?>