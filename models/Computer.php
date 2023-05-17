<?php

class Computer
{   
    function __construct(protected String $motherboard, protected String $CPU, protected String $GPU, protected String $memory)
    {
        $this->motherboard = $motherboard;
        $this->CPU = $CPU;
        $this->GPU = $GPU;
        $this->memory = $memory;
    }
}
