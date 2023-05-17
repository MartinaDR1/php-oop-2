<?php
include_once __DIR__ . '/models/Computer.php';
include_once __DIR__ . '/models/Desktop.php';
include_once __DIR__ . '/models/Laptop.php';
include __DIR__ . "/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/style.css">
    <title>PHP OOP 2!</title>
</head>
<body>

    <h1 class="text-center ">Computers List</h1>
<div class="cards d-flex">

    <div class="container">
        <?php foreach ($computers as $computer) {?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?=$computer->brand?> <?=$computer->model?> </h5>
                    <h6 class="card-subtitle mb-2 text-muted "> <?=$computer->getType()?> </h6>
                    <ul class="list-group">
                        <li class="list-group-item">Motherboard <?=$computer->motherboard?></li>
                        <li class="list-group-item">CPU <?=$computer->CPU?></li>
                        <li class="list-group-item">GPU <?=$computer->GPU?></li>
                        <li class="list-group-item">Memory <?=$computer->memory?></li>
                        <li class="list-group-item">
                                <?= $computer->getType() === "Desktop" ? "keyboard " : "Battery " ?><?= $computer->getType() === "Desktop" ? $computer->keyboard : $computer->battery ?>
                            </li>
                            <li class="list-group-item">
                                <?= $computer->getType() === "Desktop" ? "monitor" : "TouchPad " ?><?= $computer->getType() === "Desktop" ? $computer->monitor : $computer->touchpad ?>
                            </li>
                    </ul>
                </div>
            </div>
        <?php }?>

    </div>
</div>

</body>
</html>
