<?php

$computers=[

    new Desktop (
        'Apple',
        'MacBook Pro',
        'https://picsum.photos/300/200', 
        'Keyboard',
        'Monitor',
    ),
    
    new Laptop(
        'Dell',
        'XPS Tower',
        'https://picsum.photos/300/200',
        'Battery',
        'Touchpad'
    ),
    
    new Desktop(
        'Apple',
        'MacBook Pro',
        'https://picsum.photos/300/200',
        'Keyboard',
        'Monitor'
    ),
    
    new Laptop(
        'Dell',
        'XPS Tower',
        'https://picsum.photos/300/200',
        'Battery',
        'Touchpad'
    )
];


foreach ($computers as $computer) {
    $computer->setPortability();
}


?>