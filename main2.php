<?php
require_once 'src/utils/AbstractClassLoader.php';
require_once 'src/utils/ClassLoader.php';



$loader = new \utils\ClassLoader('src');
$loader->register();

use app\model\Pizza;
use app\model\PizzaCustom;
use app\model\Recipe;
$List=[];
$Pizza1 = new Pizza('recipe','Margarita','12,5',40,$List);
$Pizza1->addIngredient('tomate',$List);
$Pizza1->addIngredient('radis',$List);
$Pizza1->addIngredient('blabla',$List);
$Pizza1->addIngredient('riz',$List);
$Pizza1->addIngredient('nutella',$List);
$Pizza2 = new Pizza('recipe','Reine','12,5',40,$List);
$Pizza2->addIngredient('tomate',$List);
$Pizza2->addIngredient('radis',$List);
$Pizza2->addIngredient('riz',$List);
$Pizza2->addIngredient('nutella',$List);





echo"\nWelcome to MARIO PIZZA ! \n";

echo("\nEnter 1 : -for a custom pizza\nEnter 2 : -to see the pizza menu\nEnter 3 : -to cancel\n\n");

$number = (int)readline('Enter the number please :');
switch($number){
    case 1:
        echo ("\nWhat are the ingredients you want for your personalized pizza\n");
        break;

    case 2:
        echo("\nHere is the list of pizzas\n\n");
        foreach ($List as $key => $val){
            echo "".$key." ".$val['price']."€\n";

        }
        $pizza_choice=readline('Type the name of the Pizza please :');
        switch($pizza_choice){
           default:
           foreach ($List as $key => $val){
               if($pizza_choice == $key){
                   echo "You chose the pizza $key\n";
                   echo "Here are the ingredients of this Pizza:\n\n";
                   foreach ($val['ingredients'] as $key_num => $value){
                       echo "".$key_num." ".$value."\n";
                   }

               }


           }
           break;
        }
    case 3:
        exit;
    default:
        echo 'Incorrect number';
}

