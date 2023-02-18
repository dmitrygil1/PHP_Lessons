<?php

//Циклы для чайников


//Цикл с предусловием

$i = 10;
while ( $i < 10) {
    echo "Цикл с предусловием: $i "; //сначала проверяет, потом делает
    $i++;
}

//Цикл с постусловием do-while

$i = 10;
do {
    echo "Цикл с постусловием $i "; //сначала делает, потом проверяет
    $i++;
} while ($i <10);
var_dump($i."-цикл выполнился даже после несоблюдения условия"); //11


//Цикл со счетчиком

//for (<инициализация>; <Условие>; <выражение после одной итерации>) {
//   тело цикла  }


//если число четное (делится на 2) - вывести на экран
for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
        //тело цикла
        echo "$i ";
    }
}