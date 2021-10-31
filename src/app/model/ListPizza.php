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
    public function ListPizzasStock($list){
        foreach ($list as $key => $val){
            echo "".$key." ".$val['Stock']."\n";
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

    public function AddCustomToCart(&$cartList, $tmpList){
        $cartList[]['Custom']=$tmpList;
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

    public function calcPriceCart($cartList){
        $s=0;
        $sc=0;
        foreach ($cartList as $key => $value){
            foreach ($value as $k => $v){
               $s=$s+$v['Price'];
            }
            foreach ($value['Custom'] as $k => $v){
                foreach ($v as $line => $array){
                    $sc=$sc+$array['Price'];
                }

            }

        }
        if($sc !== 0){
            $sc=$sc+5;
        }
        return $s+$sc."€";
    }

    public function viewOrders($ordersList){
        foreach ($ordersList as $key => $value){
            $result="Order n° ".$key;
            foreach ($value as $k => $v){
//                $result=$result."\n      ".$k;
                foreach ($v as $prop => $v2){
                    $result=$result."\n   ".$prop.":";
                    foreach ($v2['Ingredients'] as $id => $ingredient){
                        $result=$result."\n     -".$ingredient;
                    }
                }
            }
        }
        echo $result."\n";
    }

    public function OrderDone($ordersList,$order){
        unset($ordersList[$order]);
    }




}