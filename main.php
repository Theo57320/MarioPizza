<?php
ini_set("display_errors", 1);
require_once 'src/utils/AbstractClassLoader.php';
require_once 'src/utils/ClassLoader.php';


$loader = new \utils\ClassLoader('src');
$loader->register();

use app\model\Pizza;
use app\model\PizzaCustom;

$Pizza1 = new Pizza('recipe','Margarita','12,5',40);

echo "Afficher le nom de la Pizza 1 : \n";
echo $Pizza1->name."\n\n";
echo "Afficher le type de la Pizza 1 : \n";
echo $Pizza1->type."\n\n";

$Pizza2 = new PizzaCustom();


echo "Afficher le type de la Pizza 2 : \n";
echo $Pizza2->type."\n\n";

$Pizza1->addIngredient('tomate');
$Pizza1->addIngredient('radis');
echo "Afficher les ingrédiants de la Pizza 1 : \n";
$Pizza1->listIngredients() ;
$Pizza1->removeIngredients(1) ;
echo "\nAfficher les ingrédiants de la Pizza 1 après suppression: \n";
$Pizza1->listIngredients() ;

echo "\nChanger le prix de la Pizza 1 : \n";
$Pizza1->changePizzaPrice(14);
echo $Pizza1->price."\n\n";

//$Pizza2->addIngredient('tomate');
//$Pizza2->addIngredient('thon');
//$Pizza2->addIngredient('jambon');

//$Pizza2->listIngredients() ;




