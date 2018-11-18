<?php


abstract class product
{
    protected $name;
    public $price;

    protected static $income = 0;

    function __construct($name, $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }

    abstract public function sell($quantity);

    public function print_income()
    {
        echo "Общий доход всех товаров: " . self::$income;
    }
}

