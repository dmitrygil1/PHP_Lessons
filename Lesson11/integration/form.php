<?php
include __DIR__.'/products.php';
include __DIR__.'/order.php';

$product = $products[$_REQUEST['id'] ?? 0];
$success = false;
$error = false;


if (! empty($_POST)) {

    if (empty($_POST['name']) || strlen($_POST['id']) <= 0 ) {
        $error = true;
    } else {
        if (makeOrder($product, $_POST['name'])) {
            $success = true;
            $error = false;
        } else {
            $error = true;
            $success = false;
        }

    }
}
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
                <li><a href="about.html">О нас</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h1>Покупка</h1>


        <?php if ($success) {?>
        <p class="success">
            Ваша покупка оформлена
        </p>
        <?php } else {?>
            <?php if ($error) {?>
            <p class="error">
                Нужно выбрать товар и заполнить ваше фио
            </p>
            <?php }?>

            <div class="items">
                <figure>
                    <p><img src="<?= $product['img']?>" alt="" /></p>
                    <figcaption><?= $product['name']?></figcaption>
                </figure>
            </div>

            <form action="form.php" method="post">
                <input type="hidden" name="id" value="<?=$product['id']?>">
                <label>
                    Ваше ФИО*:
                    <input name="name" type="text" placeholder="Введите ваше фио">
                </label>
                <input type="submit" class="btn" value="Купить">
            </form>
        <?php }?>
    </div>

</body>
</html>