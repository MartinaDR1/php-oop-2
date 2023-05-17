<?php

require_once __DIR__ .'/models/Computer.php';

class Desktop extends Computer 
{

    function __construct(protected String $keyboard, protected String $mouse, protected String $monitor, protected String $psu)
    {
        parent::_construct();
        $this->keyboard = $keyboard;
        $this->mouse = $mouse;
        $this->monitor = $monitor;
        $this->psu = $psu;
    }
}