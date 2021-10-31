<?php

namespace app\model;

class Ingredients
{
    protected  $name, $price;

    public function __construct($name, $price,$stock,&$list){
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
        ListPizza::setPrice($list,$name,$price);
        ListPizza::setStock($list,$name,$stock);
    }




}