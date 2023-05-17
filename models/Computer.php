<?php
class Computer
{   
    function __construct(public string $brand, public string $model, public string $image, public string $motherboard, public string $CPU, public string $GPU, public string $memory)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->image = $image;
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