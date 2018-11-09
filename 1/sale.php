<?php

require_once "price.php";

class sale extends price
{
    public $sale = 0;
   public function ShowSalePrice($sale) {
       $this->sale = $this->price - $sale;
       echo "Цена со скидкой $sale ровна: $this->sale";
   }
}