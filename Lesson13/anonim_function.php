<?php
//Урок посвящён АНОНИМНЫМ ФУНКЦИЯМ
$a = 1;
$b = 2;

$functionAnonim = function ($a) {
  return 2 + $a;
};

echo $functionAnonim($b); //4
//ЗАМЕТКА: мы вызываем переменную, в которую записано значение функции
//Таким образом мы обращаемся напрямую к функции с каким-то аргументом, а уже она в свою очередь - к функции
//т.е. мы кладем функцию внутрь переменной
//что забавно, но поскольку php позволяет считая переменную контейнером - функционал довольно интересный