<?php
include_once __DIR__ . "/../Traits/Portability.php";
class Computer
{   
    use Portability;

    public $brand;
    public $model;
    public $image;

    function __construct(string $brand, string $model, string $image)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->image = $image;
        
    }
    
    public function getType(){
        return "Computer";
    }

    
}
   
?>