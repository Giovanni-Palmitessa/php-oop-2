<?php
include __DIR__ . '/classes/Product.php';
include __DIR__ . '/classes/Food.php';
include __DIR__ . '/classes/Game.php';
include __DIR__ . '/classes/Shelter.php';
include __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php OOP 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
</head>

<body>
    <div class="container">
        <div class="cards-container d-flex flex flex-wrap">
            <?php foreach ($products as $product) { ?>
                <div class="card d-flex flex-column align-items-center">
                    <img src="<?= $product->urlImage ?>" alt="<?= $product->title ?>">
                    <?php if ($product instanceof Food) { ?>
                        <p><?= $product->getCalories() ?></p>
                    <?php } ?>

                    <?php if ($product instanceof Game) { ?>
                        <p><?= $product->getMaterial() ?></p>
                    <?php } ?>

                    <?php if ($product instanceof Shelter) { ?>
                        <p><?= $product->getShape() ?></p>
                    <?php } ?>
                </div>
            <?php } ?>

            <?php foreach ($products as $product) { ?>
                <div class="card">
                    <img src="<?= $product->urlImage ?>" class="card-img-top" alt="<?= $product->title ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product->title ?></h5>
                        <p class="card-text"><?= $product->description ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Prezzo: <?= $product->price ?></li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>