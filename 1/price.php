<?php


class price
{
    public $price = 0;
    public static $count = 0;

    public function __construct($price) {
        $this->price = $price;
        self::$count++;
    }
    public function ShowPrice() {
        echo "<p> Цена: $this->price<p>";
    }
    public function ChangePrice($price) {
        echo "Цена была :" . $this->price;
        $this->price = $price;
        echo "<br> Цена стала :" .  $this->price;

    }
}