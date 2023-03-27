<?php
//SELECT DATA IN DB
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
//        "INSERT INTO `products`(`id`, `name`, `description`, `price`, `count`, `stock_id`)
//        VALUES ('2','Люстра','Отличная','2000','15','5'),
//               ('3','Шторы','Затемненные','1000','15','8'),
//               ('4','Диван','Удобный','4000','15','1')"
    "select name as 'Название', price as 'Цена' from products"
    //    Исключение дублей:
    //    "select distinct name from products"
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