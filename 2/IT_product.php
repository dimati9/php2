<?php

require_once "product.php";

class IT_product extends product
{
    function __construct($r_product)
    {
        $this->name = $r_product->name;
        $this->price = $r_product->price;
    }

    public function sell($quantity)
    {
        parent::$income = parent::$income + ($quantity * $this->price * 0.5);
    }
}
