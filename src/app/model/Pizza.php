<?php

namespace app\model;

class Pizza extends AbstractPizza
{
    protected $name,$price,$stock;

    public function __construct($type='recipe',$name,$price,$stock){
        parent::__construct($type);
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function __toString()
    {
        return $this->type.", ".$this->name.", ".$this->price."\n";

    }

    public function changePizzaPrice($newPrice){
        $this->price = $newPrice;
    }


















}