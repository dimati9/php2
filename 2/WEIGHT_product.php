<?php

require_once "product.php";

class WEIGHT_product extends product
{
    public function get_final_price($weight) {
        if ($weight < 3) {
            return $this->price;
        }
        elseif ($weight >= 3 && $weight < 6) {
            return $this->price * 0.6;
        }
        else {
            return $this->price * 0.3;
        }
    }
    public function sell($weight)
    {
        parent::$income = parent::$income + ($weight * $this->get_final_price($weight));
    }
}