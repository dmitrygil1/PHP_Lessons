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