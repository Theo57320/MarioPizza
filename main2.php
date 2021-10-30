<?php
require_once 'src/utils/AbstractClassLoader.php';
require_once 'src/utils/ClassLoader.php';



$loader = new \utils\ClassLoader('src');
$loader->register();

use app\model\Pizza;
use app\model\PizzaCustom;
use app\model\Recipe;
use app\model\ListPizza;

$PizzaList = new ArrayObject();
$Cart = [];
$Pizza1 = new Pizza('recipe','Margarita','12,5',40,$PizzaList);
$Pizza1->addIngredient('tomate',$PizzaList);
$Pizza1->addIngredient('radis',$PizzaList);
$Pizza1->addIngredient('blabla',$PizzaList);
$Pizza1->addIngredient('riz',$PizzaList);
$Pizza1->addIngredient('nutella',$PizzaList);
$Pizza2 = new Pizza('recipe','a','12,5',40,$PizzaList);
$Pizza2->addIngredient('tomate',$PizzaList);
$Pizza2->addIngredient('radis',$PizzaList);
$Pizza2->addIngredient('riz',$PizzaList);
$Pizza2->addIngredient('nutella',$PizzaList);

//print_r($PizzaList) ;


//$listPizza->ListPizzasNames();
//$PizzaList->getList;


start:
echo"\nWelcome to MARIO PIZZA ! \n";

echo("\nEnter 1 : -for a custom pizza\nEnter 2 : -to see the pizza menu\nEnter 3 : -to cancel\n\n");

$number = (int)readline('Enter the number please :');
switch($number){
    case 1:
        echo ("\nWhat are the ingredients you want for your personalized pizza\n");
        break;

    case 2:
        echo("\nHere is the list of pizzas\n\n");
        ListPizza::ListPizzasNames($PizzaList);
        $pizza_choice=readline('Type the name of the Pizza please :');
        switch($pizza_choice){
           default:
           foreach ($PizzaList as $key => $val){
               if(strtolower($pizza_choice) == strtolower($key)){
                   echo "You chose the pizza $key\n";
                   echo "Here are the ingredients of this Pizza:\n\n";
                    ListPizza::getIngredients($val);
                   echo "\nWould you chose this one ? (You can remove ingredients later)\n\n";
                   echo("\nEnter 1 : -To add to cart\nEnter 2 : -to cancel\n\n");
                   $addToCart=readline('Enter the number please :');
                   switch ($addToCart){
                       case 1:
                           ListPizza::AddToCart($PizzaList,$Cart,$key);
//                           ListPizza::SeeCart($Cart);
//                           $Cart->ListPizza::ListPizzasNames();
                           echo ("\nPizza Added to cart\n");
                           removeIngrediant:
                           echo "Would you remove an ingredient ?\n";
                           echo("\nEnter 1 : -Yes\nEnter 2 : -No\n\n");
                           switch (readline('Enter the number please :')){
                               case 1:
                                   echo "Which one ?\n";
                                   ListPizza::getIngredientsFromCart($Cart,$key);
                                   $line=readline('Enter the number please :');
                                   switch($line){
                                       default:
                                           ListPizza::unsetIngredientFromCart($Cart,$key,$line);
                                           goto removeIngrediant;
                                           break;
                                   }
                                   break;
                               case 2:
                                   echo "Do you want another pizza?\n";
                                   echo("\nEnter 1 : -Yes\nEnter 2 : -No, I want to finalize my order \n\n");
                                   switch (readline('Enter the number please :')){
                                       case 1:
                                           goto start;
                                           break;
                                       case 2:
                                           echo "Thank you for your order\n";
                                           break;
                                   }
                                   break;

                           }

                           break;
                       case 2:
                           goto start;
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

