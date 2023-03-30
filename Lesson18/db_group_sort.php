<?php
//Операторы сортировки, группировки и ограничения выборки

//SELECT DATA IN DB
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
        //"select name, sum(count) from products group by name" //группировка товаров по имени с суммой по кол-ву
        //"select name, max(price) as 'максимальная цена' from products group by name"//одинаковые имена с макс. ценой
        //"select name, stock_id from products group by name, stock_id" //одинаковые имена на разных складах
        //"select name, stock_id, sum(count) from products group by name, stock_id"//то же самое, но с кол-вом
        //"select name, stock_id, sum(count) as 'Количество' from products group by name, stock_id having 'Количество' <10"
        "select name, count, price from products order by name asc limit 4"//сортировка по столбцу name 4 первые)
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