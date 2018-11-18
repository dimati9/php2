<?php

require_once "product.php";

class REAL_product extends product
{
    public function sell($quantity)
    {
        parent::$income = parent::$income + ($quantity * $this->price);
    }
}