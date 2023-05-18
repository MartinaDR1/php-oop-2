<?php
include_once __DIR__ . '/models/Computer.php';
include_once __DIR__ . '/models/Desktop.php';
include_once __DIR__ . '/models/Laptop.php';
include __DIR__ . "/db.php";

?>

    <?php include __DIR__ . "/View/layout/head.php" ?>

    <?php include __DIR__ . "/View/partial/header.php" ?>

    <main>

        <?php include __DIR__ . "/View/partial/jumbotron.php" ?>
        <?php include __DIR__ . "/View/partial/cards.php" ?>

    </main>

</body>
</html>
