<?php
require_once 'src/utils/AbstractClassLoader.php';
require_once 'src/utils/ClassLoader.php';



$loader = new \utils\ClassLoader('src');
$loader->register();

use app\model\Pizza;
use app\model\PizzaCustom;
use app\model\Recipe;
use app\model\ListPizza;
$pass='$2y$10$XWY2hekXyFLsokyC890q1eBraubGXak2oW8myLJUQM.IfkxTso88O';
$PizzaList = new ArrayObject();
$IngredientsList = new ArrayObject();
$Cart = [];
$Orders=[];
$Pizza1 = new Pizza('recipe','Margarita','12.5',40,$PizzaList);
$Pizza1->addIngredient('tomate',$PizzaList);
$Pizza1->addIngredient('radis',$PizzaList);
$Pizza1->addIngredient('blabla',$PizzaList);
$Pizza1->addIngredient('riz',$PizzaList);
$Pizza1->addIngredient('nutella',$PizzaList);
$Pizza2 = new Pizza('recipe','a','12.5',40,$PizzaList);
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
                                           $Orders[]=$Cart;
                                           echo "Thank you for your order,you need to pay ".ListPizza::calcPriceCart($Cart)." when receiving your order\n";
                                           $Cart=[];
                                           goto start;
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
    case 4:
        echo "Welcome to the admin page\n";
        $password_value = readline('Enter your password please (This is simply "password"):');
        switch ($password_value){
            default :
                if(password_verify($password_value,$pass)){
                    echo "\nYou are connected\n";
                    admin:
                    echo "What do you want to do ?\n";
                    echo("\nEnter 1 : -View orders\nEnter 2 : -View and edit pizzas\nEnter 3 : -View stocks\nEnter 4 : -Return to start\n\n");
                    switch (readline('Enter a number please :')){
                        case 1:
                            ListPizza::viewOrders($Orders);
                            break;
                        case 2:
                            echo "There is the list ofs pizzas Recipes:\n\n";
                            ListPizza::ListPizzasNames($PizzaList);
                            echo "\nWhat do you want to do ?\n";
                            echo("\nEnter 1 : -Change the price of a pizza\nEnter 2 : -Change price of an ingredient\nEnter 3 : -New pizza\nEnter 4 : -New ingredient\nEnter 5 : -Return to the admin page\n\n");
                            switch (readline('Enter a number please : ')){
                                case 1:
                                    echo "Which pizza ?\n\n";
                                    ListPizza::ListPizzasNames($PizzaList);
                                    $pizza_choice_price=readline('Type the name of the Pizza please :');
                                    switch($pizza_choice_price) {
                                        default:
                                            foreach ($PizzaList as $key => $val) {
                                                if (strtolower($pizza_choice_price) == strtolower($key)) {
                                                    echo "You chose the pizza $key\n";
                                                    $pizza_newprice=readline('What is the new price ? :');
                                                    ListPizza::setPrice($PizzaList,$key,$pizza_newprice);
                                                    echo"\nThe price of $key has been changed to $pizza_newprice €";
                                                    goto admin;
                                                }
                                            }goto admin;
                                    }
                                case 2:
                                    echo "Which Ingredient ?\n\n";
                                    ListPizza::ListPizzasNames($PizzaList);
                                    $ingredient_choice_price=readline('Type the name of the ingredient please :');
                                    switch($ingredient_choice_price) {
                                        default:
                                            foreach ($IngredientsList as $key => $val) {
                                                if (strtolower($ingredient_choice_price) == strtolower($key)) {
                                                    echo "You chose the ingredient $key\n";
                                                    $ingredient_newprice=readline('What is the new price ? :');
                                                    ListPizza::setPrice($IngredientsList,$key,$ingredient_newprice);
                                                    echo"\nThe price of $key has been changed to $ingredient_newprice €";
                                                    goto admin;
                                                }
                                            }goto admin;
                                    }
                                case 3:
                                    echo "Create a new Pizza ";
                                    $New_Pizza_Name = readline('Type the name of the new Pizza please :');
                                    $New_Pizza_Price = readline('Type the price of the new Pizza please (please use "." instead of "," :');
                                    $New_Pizza_Stock = readline('Type the stock of the new Pizza please :');
                                    $New_Pizza = new Pizza('recipe',$New_Pizza_Name,$New_Pizza_Price,$New_Pizza_Stock,$PizzaList);
                                    echo "\nYou must add at least 3 ingredients\n";
                                    $New_Pizza_Ingredient1 = readline('Type one ingredient of the new Pizza please :');
                                    $New_Pizza_Ingredient2 = readline('Type one ingredient of the new Pizza please :');
                                    $New_Pizza_Ingredient3 = readline('Type one ingredient of the new Pizza please :');

                                    $New_Pizza->addIngredient($New_Pizza_Ingredient1,$PizzaList);
                                    $New_Pizza->addIngredient($New_Pizza_Ingredient2,$PizzaList);
                                    $New_Pizza->addIngredient($New_Pizza_Ingredient3,$PizzaList);
                                    more_ingredient:
                                    echo "\nWould you add more ingredients ?";
                                    echo("\nEnter 1 : -Yes\nEnter 2 : -No\n\n");

                                    $more_ingredient = readline('Type a number please :');
                                    switch ($more_ingredient){
                                        case 1:
                                            $New_Pizza_Ingredient_again = readline('Type one ingredient of the new Pizza please :');
                                            $New_Pizza->addIngredient($New_Pizza_Ingredient_again,$PizzaList);
                                            goto more_ingredient;
                                        case 2:
                                            echo "\n Your pizza has been created\n";
                                            goto admin;
                                    }
                                case 4:
                                    echo"Create a New ingredient";
                                case 5:
                                    goto admin;


//                                    ListPizza::ListPizzasNames($PizzaList);
                            }
                            break;
                        case 3:
                            echo "View stocks\n";
                            ListPizza::ListPizzasStock($PizzaList);

                        case 4:
                            goto start;
                    }

                }else {
                    echo "\nPassword error\n";
                    goto start;
                }

        }

    default:
//        echo "Incorrect number\n\n";
//        goto start;
}

