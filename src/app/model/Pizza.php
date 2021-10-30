<?php

namespace app\model;

class Pizza extends AbstractPizza
{
    protected $name,$price,$stock,$list;


    public function __construct($type='recipe', $name, $price, $stock, &$list){
        parent::__construct($type);
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
        ListPizza::setPrice($list,$name,$price);
        ListPizza::setStock($list,$name,$stock);

//        $list[$name]['price']=$price;
//        $list[$name]['stock']=$stock;
//        $list[$name]['ingredients']=$this->ingredients;

    }

//    public function __toString()
//    {
//        return $this->type.", ".$this->name.", ".$this->price."\n";
//
//    }

    public function changePizzaPrice($newPrice,&$list){
        $this->price = $newPrice;
        ListPizza::setPrice($list,$this->name,$this->price);

    }
    public function removeIngrediantPizza($ligne){

        $pizzaCopy = New Pizza($this->type='recipe',$this->name,$this->price,$this->stock);

        unset($pizzaCopy->ingredients[$ligne]); ;



    }




















}