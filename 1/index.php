<?php

require_once "price.php";
require_once "sale.php";

$a = new price(300);
$a->ShowPrice();
$a->ChangePrice(350);
$a->ShowPrice();
//
//
//$b = new price(500);
//$b->ShowPrice();

$c = new sale(600);
$c->ShowPrice();
$c->ShowSalePrice(200);

echo "<br>" . "Объектов класса price:". price::$count;
