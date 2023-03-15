<?php

//------------КУКИ------------//

//Куки - временные данные, которые могут потребоваться серверу, но хранящиеся на стороне клиента
//Пример: id/ логин и пароль чтобы не вводить их снова/ данные предпочтений метрики или GA4

//var_dump(setcookie ('test','testvalue',time()+3660));//отдает true или false - установили ли мы куки пользователю
//ВАЖНО: Куки находятся в заголовке запроса HTTP и перед ними не должно быть других данных

//var_dump($_COOKIE['test']);//отдает testvalue
//Для удаления куки достаточно поставить маленькое время, но >0 т.к. тогда куки будут жить до конца сессии

//Приложение - счётчик количества заходов
if (!$_COOKIE['count_vizit']) {
    setcookie('count_vizit',1, time()+60^60^24);//ставим куки, истекающие через сутки
    $counter = 1;
} else {
    $counter = 1 + $_COOKIE['count_vizit'];
    setcookie('count_vizit',$counter, time()+60^60^24);//ставим куки, истекающие через сутки
};

echo 'Вы заходили на страницу:'.$counter;
