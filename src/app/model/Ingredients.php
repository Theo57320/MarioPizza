<?php

namespace app\model;

class Ingredients
{
    protected  $name, $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }


    public function __toString($type, $name)
    {
        return $this->price. ",".$this->name;
    }

}