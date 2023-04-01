<?php
//SELECT DATA IN DB WHERE ...
$host = 'localhost';
$user = 'mysql';
$password = 'mysql';
$dbname = 'mysql';

$connect = mysqli_connect($host,$user,$password,$dbname);

if (mysqli_connect_errno()){
    echo mysqli_connect_error();
} else {

    $result = mysqli_query(
        $connect,
        //"select name, price from products where price <> 2000" // всё кроме 2000
        //"select name, price from products where price >= 2000"
        //"select name, price from products where description is not null" //товары с описанием

        //"select name, price from products where price between 2000 and 5000" //2000<=*наш товар*<=5000
        //"select name, price from products where price in (2000, 4000)" //только товары с price 2000 и 4000

        //"select name, price from products where name like '%с%'"//выборка товаров с буквой 'с' в названии
        //"select id, name, price from products where id < 5 and price <= 2000" //по двум условиям
        //"select id, name, price from products where id < 5 or price >= 2000" //по одному из двух условий
        //"select id, name, price, count from products where count > 5 xor price <= 2000" //либо
        "select id, name, price from products where not price = 2000"//почти <> или !=

    );

//    проверка true/false
//    var_export($result);
//проверка при выводе всех столбцов
    while ($row = mysqli_fetch_assoc($result))
    {
        echo '<p>';
        var_export($row);
        echo '</p>';
    };

}
//Закрываем подключение, чтобы не нагружать сервер БД
mysqli_close($connect);


//ВАЖНО: в настоящее время в основном используются готовые шаблоны запросов (например драйвер PDO или вшитый прямо в
// phpMyAdmin), однако инструмент полезен только когда запросы формируются часто или сами по себе довольно крупные