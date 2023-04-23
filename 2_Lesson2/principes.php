<?php
/*Данный урок посвящен принципам ООП:
 *В рамках него мы рассмотрим 3 базовых принципа: Инкапсуляция, наследование и полиморфизм
 *и один в довесок: абстракция
*/


//-------------Абстракция-------------//
//Абстракция вообще не выделяется отдельно. Но на всякий повторим данный материал.
//Абстракция - выделение наиболее важной информации в программный объект и исключение менее важной информации.

//Кейс: студенческая столовая

class Cook {

  public function makeFood()
  {
    switch ($this ->whatToCook()) {
        case 'Candy':
            return new Candy();
        case 'Soup':
            return new Soup();
        case 'Pie';
            return new Pie();
    }
  }

  public function whatToCook(){
      $menu = ['Candy','Soup','Pie'];
      $randInt = rand(0,count($menu) - 1);

      return $menu[$randInt];
  }
};

class Food {
    public function eat() {

    }
};

class HungryStudent {
    public function eatFood(Food $food) {
        $food->eat();
    }
}

class Candy extends Food {

}

class Soup extends Food {

}

class Pie extends Food {

}

$cook = new Cook();
$student1 = new HungryStudent();
$student2 = new HungryStudent();

$student1->eatFood($cook->makeFood());
$student2->eatFood($cook->makeFood());

//В данном примере абстракция это студент, повар, еда - нам не особо важно какой повар, какой студент и какая еда.
//Нам важно что какой-то студент может есть какую-то еду, приготовленную каким-то поваром

//-------------Инкапсуляция-------------//
//Инкапсуляция - возможность объекта объединять данные и методы, работающие с ними, а также скрывать
//свое внутреннее устройство, детали реализации и данные пользователя

class Divider{

    protected $divideTo; //Если был бы privite - не смогли бы обращаться в дочерних классах

    public function divide()
    {
        return 100 / $this->getDivideTo();
    }

    private function getDivideTo()
    {
        return $this->divideTo;
    }

    public function setDivideTo($divideTo)
    {
        if ($divideTo === 0)
        {
            echo 'Делить на ноль нельзя';
            $divideTo =1;//к приватному свойству можно обратится изнутри функции
        }

        $this->divideTo = $divideTo;
    }
}

class NewDivider  extends Divider {

    public function setDivideTo($divideTo)
    {
        if ($divideTo === 0)
        {
            $divideTo =100;
        }

        return $this->divideTo = $divideTo;
    }
}

$divider = new Divider();

$divider->setDivideTo(0);

//При этом $divider->DivideTo = 0; выдаст ошибку, что мы обращаемся к приватному классу вне функции

echo $divider->divide();

//Таким образом мы скрыли реализацию DivideTo от пользователя и private function getDivideTo() от др. классов



//-------------Наследование-------------//
/* А также parrent и self
 *
 * Наследование - возможность описать новый класс на основе уже существующего
 * цель - использование функционала базового класса полностью или частично без его написания снова
 * а также возможность эту функциональность переопределить если нужно 
 * */

class Pet
{
    public function walk()
    {
        echo 'Топ-топ-топ'. PHP_EOL;
    }

    public function sleep()
    {
        echo 'ZzzZZZzzzZZZZ'. PHP_EOL;
    }
    
    public function say()
    {
        //неизвестно что говорит абстарктное животное, поэтому пусто
    }
}

class Cat extends Pet
{
    public function say()//переопределяем метод say в дочернем классе
    {
        echo 'Мяу'. PHP_EOL;//задаем то, что делает дочерний класс т.к. мы уже знаем что он делает
    }

    public function catchMouse()
    {
        echo 'Кот ловит мышку...'.PHP_EOL;
    }
}

class Dog extends Pet
{
    public function say()
    {
        echo 'Гав-гав'. PHP_EOL;
    }
}

class Horse extends Pet
{
    public function walk()
    {
        echo 'Тыгыдык-тыгыдык'.PHP_EOL;
    }

    public function say()
    {
        echo 'Иго-го'. PHP_EOL;
    }
}

$cat = new Cat();
$dog = new Dog();
$horse = new Horse();

//$cat->walk();
//$cat->say();//мяу
//$cat->sleep();
//$cat->catchMouse();//Кот ловит мышку - новая функция для дочернего класса. В родительском такого нет, как и в других.

//$dog->walk();
//$dog->say();//Гав-гав
//$dog->sleep();

//$horse->walk();//Тыгидык-тыгидык
//$horse->say();//Иго-го
//$horse->sleep();

class Tiger extends TalkativeCat//получилась вложенность: базовый -< дочерний(кот) -> дочерний(тигр)
{
    public function say()
    {
        echo 'Ррррр'.PHP_EOL;
    }

    public function catchMouse()
    {
        echo 'Тигр ловит мышку...'.PHP_EOL;
    }

    public function walk()
    {
        self::say();//Пример отличия self от this - this указывает на объект, self - на текущий класс
        //а т.к. в нашем случае say мы берем из talkativeKat - для данного действия say будет как у talkativeKat
        parent::walk();
    }
}
$tiger = new Tiger;

$tiger->walk();
$tiger->say();//Ррррр
$tiger->sleep();
$tiger->catchMouse();//и тигр также ловит мышку

//Однако есть ограничение: нельзя наследоваться от нескольких классов (в PHP запрещено множественное наследование)


//Также часто нужно обратится к методам родительского класса, для этого используют parent:

class TalkativeCat extends Cat
{
    public function walk()
    {
        $this->say();//для этого класса будет вызвана сначала say
        parent::walk(); //а затем собственно walk будет вызван из родительского класса
    }

    public function sleep()
    {
        $this->say();//аналогично
        parent::sleep();
    }
}

$talkativeCat = new TalkativeCat();

$talkativeCat->walk();//мяу + топ-топ-топ, где мяу как-бы этого класса, а walk - родительского
$talkativeCat->sleep();//мяу + zzzZZZZzzzZZZ

//Также self. Он указывает на текущий класс. Очень похож на $this



//---------Полиморфизм---------//

//Полиморфизм - возможность системы использовать разные объекты с разной реализацией, но
//одинаковой спецификацией
//Пример - первый вариант про столовую
//Также для понимания:

class Printer
{
    public function print()
    {
        //какая-то логика...
    }
}

class SomePrinter extends Printer {}
class OtherPrinter extends Printer {}

function goPrint(Printer $printer)
{
    $printer->print();
}

goPrint(new SomePrinter());
goPrint(new OtherPrinter());//Вот явный пример полиморфизма - не важно какой экземпляр, они все умеют в print()