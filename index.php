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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
</head>

<body>
    <div class="container">
        <div class="cards-container d-flex flex flex-wrap">
            <?php foreach ($products as $product) { ?>
                <div class="card">
                    <img src="<?= $product->urlImage ?>" class="card-img-top" alt="<?= $product->title ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product->title ?></h5>
                        <p class="card-text"><?= $product->description ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Questo prodotto è per il tuo <?= $product->animal ?> </li>
                        <li class="list-group-item">Prezzo: <?= $product->price ?></li>
                        <!-- FOOD -->
                        <?php if ($product instanceof Food) { ?>
                            <li class="list-group-item">Calorie: <?= $product->getCalories() ?> Kcal</li><?php } ?>
                        <?php if ($product instanceof Food) { ?>
                            <li class="list-group-item">Ingredienti: <?= $product->getIngredients() ?></li><?php } ?>
                        <?php if ($product instanceof Food) { ?>
                            <li class="list-group-item">Peso: <?= $product->getWeight() ?> KG</li><?php } ?>
                        <!-- GAME -->
                        <?php if ($product instanceof Game) { ?>
                            <li class="list-group-item">Materiale: <?= $product->getMaterial() ?></li><?php } ?>
                        <?php if ($product instanceof Game) { ?>
                            <li class="list-group-item">Colore: <?= $product->getColor() ?></li><?php } ?>
                        <?php if ($product instanceof Game) { ?>
                            <li class="list-group-item">Tipo: <?= $product->getType() ?></li><?php } ?>
                        <!-- SHELTER -->
                        <?php if ($product instanceof Shelter) { ?>
                            <li class="list-group-item">Taglia: <?= $product->getSize() ?></li><?php } ?>
                        <?php if ($product instanceof Shelter) { ?>
                            <li class="list-group-item">Forma: <?= $product->getShape() ?></li><?php } ?>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link"><button type="button" class="btn btn-success">Aggiungi al carrello <i class="fa-solid fa-cart-shopping"></i></button></a>
                        <a href="#" class="card-link">Compralo subito</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>