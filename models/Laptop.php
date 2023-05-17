<?php

require_once __DIR__ .'/models/Computer.php';

class Laptop extends Computer
{
    function __construct(protected String $battery, protected String $touchpad)
    {
        parent::_construct();
        $this->battery = $battery;
        $this->touchpad = $touchpad;
    }
}