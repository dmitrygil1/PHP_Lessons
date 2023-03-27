<?php
//UPDATE DATA IN DB
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
        /* "insert into products (name,description,price,count,stock_id)
        values ('Столешница', 'Отличная столешница', '500', '1','5')" */
        //"update products set price='550' where id='10'"
        "update products set price=price + '15' order by price asc limit 2"
    );
//    "update products set price=5000");
//    "select * from products");
//
//    проверка
    var_export($result);

//    while ($row = mysqli_fetch_assoc($result)) {
//        var_export($row);
//    }

}
//Закрываем подключение, чтобы не нагружать сервер БД
mysqli_close($connect);