<?php
//-------Статические свойства и методы-------//

/*Заметка: 1. Принадлежат классу, а не объекту
 * 2. Из статичного метода нельзя обратится к не статичному методу/свойству
 * */

class Zoo
{
    protected static $animalCount = 0;
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public static function getAnimalsCount()
    {
        return self::$animalCount;
    }

    public function addAnimal()
    {
        self::$animalCount++;
    }

    public static function hasAnimals()
    {
        return self::getAnimalsCount() > 0;
    }

    public function describeZoo()
    {
        echo 'В зоопарке '.self::getName() . ' находится ' . self::getAnimalsCount() . ' животных ';
    }

    public function getName()
    {
        return $this->name;
    }
}

//Zoo::describeZoo(); - сработает только если describeZoo() - статичный
//echo Zoo::getAnimalsCount() . PHP_EOL; - 0
//var_dump( Zoo::hasAnimals()); - bool т.к. 0

//Заметка: из статичного метода нельзя обратиться к не статичному. Из не статичного к статичному - можно. Пример:

$zoo= new Zoo('Московский');
$zoo->addAnimal();

//Также статичный метод это не $this и его изменение его параметров влияет на
//все параметры в классе с этим статичным свойством

$schoolZoom = new Zoo('Школьный');
$zoo->describeZoo(); //1
$schoolZoom->describeZoo(); //тоже 1 т.к. $animalCount - статичное св-во

//-------Позднее статическое связывание-------//
//Нужно для переопределения методов по новой, как бы с чистого листа т.к. по-умолчанию
//методы берутся из родительского класса

//Пример:
class BaseTimer //родительский класс
{
    public static $time = 0;

    public function tic()
    {
        self::$time++;
    }

    public static function getTime()
    {
        return self::$time;
    }
}

//дочерние классы:
class TimerA extends BaseTimer
{
    public static $time = 0;
}

class TimerB extends BaseTimer
{

}

$timerA = new TimerA();
$timerB = new TimerB();

$timerA->tic();

echo $timerA->getTime() . PHP_EOL; //1
echo $timerB->getTime() . PHP_EOL; //1
echo BaseTimer::getTime() . PHP_EOL; //1

//Это происходит из-за статичного указателя, который меняет $time для базового класса BaseTimer
//Для избежания этой ошибки нужно использовать указатель static::

class BaseTimer2 //родительский класс
{
    public static $time2 = 0;

    public function tic2()
    {
        static::$time2++;
    }

    public static function getTime2()
    {
        return static::$time2; // <---Заменили self на static
    }
}

//дочерние классы:
class TimerA2 extends BaseTimer2
{
    public static $time2 = 0;
}

class TimerB2 extends BaseTimer2
{

}

$timerA2 = new TimerA2();
$timerB2 = new TimerB2();

$timerA2->tic2();

echo $timerA2->getTime2() . PHP_EOL; //1 - теперь всё логично, вызвали tic() для timerA - получили на timerA
echo $timerB2->getTime2() . PHP_EOL; //0
echo BaseTimer2::getTime2() . PHP_EOL; //0


//Дополнительно