<?php

namespace \app\class;

class AbstractIngredients
{
    private $type;

    public function __construct($sauce,$name,$price){
        $this->sauce = $sauce;
        $this->name = $name;
        $this->price = $price;

    }


    public function __toString($type, $name)
    {
        return
    }

}