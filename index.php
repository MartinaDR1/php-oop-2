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

    <header class="bg-dark py-3">
        <nav class="nav nav-tabs nav-stacked container">
            <a class="nav-link active" href="#">Active link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link disabled" href="#">Disabled link</a>
        </nav>
    </header>

    <main>
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container py-5">
                <h1 class="display-5 fw-bold">Custom jumbotron</h1>
                <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
                <button class="btn btn-primary btn-lg" type="button">Example button</button>
            </div>
        </div>

        <h1 class="text-center my-3">Computers List</h1>
        <div class="container">
            <div class="row row-cols-3 row-cols-xs-1">

                <?php foreach ($computers as $computer) {?>
                    <div class="card shadow p-3 mb-2">
                        <div class="card-body">
                            <img src="<?= $computer->image ?>" alt="">

                            <h5 class="card-title mt-3"><?=$computer->brand?> - <?=$computer->model?> </h5>
                            <h6 class="card-subtitle mb-2 text-muted "> <?=$computer->getType()?> </h6>
                            <ul class="list-group">
                                <li class="list-group-item">Motherboard <?=$computer->motherboard?></li>
                                <li class="list-group-item">CPU <?=$computer->CPU?></li>
                                <li class="list-group-item">GPU <?=$computer->GPU?></li>
                                <li class="list-group-item">Memory <?=$computer->memory?></li>
                                <li class="list-group-item">
                                    <?=$computer->getType() === "Desktop" ? "keyboard " : "Battery "?><?=$computer->getType() === "Desktop" ? $computer->keyboard : $computer->battery?>
                                </li>
                                <li class="list-group-item">
                                    <?=$computer->getType() === "Desktop" ? "monitor" : "TouchPad "?><?=$computer->getType() === "Desktop" ? $computer->monitor : $computer->touchpad?>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    
    </main>

</body>
</html>
