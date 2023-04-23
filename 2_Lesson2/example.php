<?php
//-------Принципы ООП на примере товарной корзины-------//

class HasPrice
{
    public function getPrice()
    {
        return 0;
    }
}


class Product extends HasPrice
{
    private $name;
    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

class Basket extends HasPrice
{
    private $products = [];

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function getPrice()
    {
        $price = 0;
        foreach($this->products as $product)
        {
            $price += $product->getPrice();
        }
        return $price;
    }
}

class PriceFormatter
{
    public function Format($value)
    {
        return $value;
    }
}

class NemberPriceFormatter extends PriceFormatter
{
    public function format($value)
    {
        return number_format($value,2,'.',' ');
    }
}

function formatItemPrice(HasPrice $hasPriceItem,PriceFormatter $formatter)
{
    return $formatter->format($hasPriceItem->getPrice());
}



$basket = new Basket;

$productCube = new Product('Кубик', 250000.50);
$productMatreshka = new Product('Матрешка',150);

$basket->addProduct($productCube);
$basket->addProduct($productMatreshka);

echo 'Первый товар "'.$productCube->getName().'" стоит '. formatItemPrice($productCube, new NemberPriceFormatter());
echo '<br/>';
echo 'Второй товар "'.$productMatreshka->getName().'" стоит '.$productMatreshka->getPrice();
echo '<br/>';
echo 'Цена всей корзины: '.$basket->getPrice();