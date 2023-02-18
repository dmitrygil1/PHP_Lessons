<?php
$a = 5;
$b = 3;
$result = $a / $b;
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Мини - сайт, математика чисел 5 и 3</title>
</head>
<body>
    <h1>Деление</h1>
    <p>5 / 3 = <?=number_format($result, '2', '.', '')?></p>
    <a href="/">Назад
</body>
</html>