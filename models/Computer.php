<?php
class Computer
{   
    function __construct(public string $brand, public string $model,public string $motherboard, public string $CPU, public string $GPU, public string $memory)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->motherboard = $motherboard;
        $this->CPU = $CPU;
        $this->GPU = $GPU;
        $this->memory = $memory;
    }
    
    public function getType(){
        return "Computer";
    }

    
}

?>