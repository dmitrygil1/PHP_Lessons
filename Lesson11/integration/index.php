<?php
include __DIR__.'/products.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Магазин</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu">
        <div class="container">
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="../integration/about/about.html">О нас</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1>Каталог</h1>
        <div class="items">
            <?php foreach ($products as $product) {?>
            <figure>
                <p><img src="<?= $product['img']?>" alt="" /></p>
                <figcaption><?= $product['name']?></figcaption>
                <a href="form.php?id=<?=$product['id']?>" class="btn">Купить</a>
            </figure>
            <?php };?>
        </div>
    </div>
</body>
</html>