<?php

require_once "product.php";
require_once "IT_product.php";
require_once "REAL_product.php";
require_once "WEIGHT_product.php";


$r_book = new REAL_product('Как монах продал свой феррари', 1200);
$it_book = new IT_product($r_book);
$w_nails = new WEIGHT_product('Виноград', 400);

$it_book->sell(1);
$r_book->sell(2);
$w_nails->sell(5);

$it_book->print_income();
