<?php
//Объединение данных из нескольких таблиц
//Join , Inner join

$host = 'localhost';
$user = 'mysql';
$password = 'mysql';
$dbname = 'mysql';

$connect = mysqli_connect($host, $user, $password, $dbname);

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
} else {

    $result = mysqli_query(
        $connect,
        //вывод товара из одной таблицы, а названий складов из другой (без привязки к stock_id внутри первой таблицы)
        "select products.name as 'Название продукта', count, price, stock_id, stock.name as 'Название склада' from products inner join stock on stock_id = stock.id"

        //ВАЖНО: если есть шанс, что значение в объединяемом столбце будет Null - нужно использовать LEFT JOIN или RIGHT JOIN (в зависимости что откуда и куда добавляем)
    //"select products.name as 'Название продукта', count, price, stock_id, stock.name as 'Название склада' from products LEFT JOIN stock on stock_id = stock.id"
    );

//    проверка true/false
//    var_export($result);

//проверка при выводе всех столбцов
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<p>';
        var_export($row);
        echo '</p>';
    };

}
//Закрываем подключение, чтобы не нагружать сервер БД
mysqli_close($connect);