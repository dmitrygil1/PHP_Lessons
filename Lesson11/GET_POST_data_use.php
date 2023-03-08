<?php
//Применение GET и POST в практических примерах

$numbers = [];

if (isset($_POST['sendnumb'])) {
    $numbers = [$_POST['number1'],$_POST['number2'],$_POST['number3']];

    if (! empty($_POST['sort'])) {
        if ($_POST['sort'] == 'desc') {
            rsort($numbers);
        } else {
            sort($numbers);
        }
    }
}

?>
<!doctype html>
<html lang="кг">
<head>
    <meta charset="UTF-8">
    <title>Get и POST запросы на практике</title>
</head>
<body>
    <pre>
        <?php
            echo 'GET: ';
            var_dump($_GET);//Получает данные из адресной строки после site.ru/page?ТУТ_ПИШЕМ_КЛЮЧИ=И_ЗНАЧЕНИЕ
            echo 'POST: ';
            var_dump($_POST);
            echo 'массив numbers';
            var_dump($numbers);
        ?>
    </pre>

    <a href="http://task.manager/PHP_Lessons/Lesson11/GET_POST_data_use.php?sort=by_neme">Отсортировать</a>
    <form action="/PHP_Lessons/Lesson11/GET_POST_data_use.php" method="get">
        Введите текст и он отправится методом GET <input type="text" name="field">
        <input type="submit" value="Отправить" name="butt">
    </form>

    <form action="/PHP_Lessons/Lesson11/GET_POST_data_use.php?link_sourse=POST" method="post">
        Введите текст и он отправится методом POST <input type="text" name="field">
        <input type="submit" value="Отправить" name="butt">
    </form>

    <h1>Сортировка чисел</h1>
    <form action="/PHP_Lessons/Lesson11/GET_POST_data_use.php?link_sourse=POST&action=sort" method="post">
        Введите число 1 <input type="number" name="number1"><br>
        Введите число 2 <input type="number" name="number2"><br>
        Введите число 3 <input type="number" name="number3"><br>

        <select name="sort" >
            <option selected value="">Не сортировать</option>
            <option value="asc">По возрастанию</option>
            <option value="desc">По убыванию</option>
        </select> <br>

        <input type="submit" value="Отправить" name="sendnumb">
    </form>

</body>
</html>