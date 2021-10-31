<?php

namespace app\model;

class ListPizza
{

//    public function __construct($list){
//       $this->list=$list;
//
//    }


    public function ListPizzasNames($list){
        foreach ($list as $key => $val){
            echo "".$key." ".$val['Price']."€\n";
        }
    }


    public function setPrice($list,$name,$price){

        $list["$name"]['Price']=$price;


    }
    public function setStock($list,$name,$stock){
        $list["$name"]['Stock']=$stock;

    }

    public function setIngredient($list,$name,$ingredients){
        $list["$name"]['Ingredients']=$ingredients;

    }

    public function getIngredients($val){
        foreach ($val['Ingredients'] as $key_num => $value){
            echo "".$key_num." ".$value."\n";
        }
    }

    public function AddToCart($list, &$cartList, $name){

        $cartList[][$name]=$list[$name];

    }
    public function SeeCart($cartList){
        print_r($cartList);

    }

    public function getIngredientsFromCart($cartList,$name){
        foreach ($cartList as $key_num => $val){
            foreach ($val as $PizzaName => $A){
                if($PizzaName = $name){
                    ListPizza::getIngredients($val[$name]);
                }
            }
        }
    }
    public function unsetIngredientFromCart($cartList, $name, $line){
        foreach ($cartList as $key_num => $val){
            foreach ($val as $PizzaName => $A){
                if($PizzaName = $name){
                    unset($val[$name]['Ingredients'][$line]);
//                    echo $val[$name]['Ingredients'][$line];
                }
            }
        }
    }




}