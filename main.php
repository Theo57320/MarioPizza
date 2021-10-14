<?php
ini_set("display_errors", 1);
require_once 'src/utils/AbstractClassLoader.php';
require_once 'src/utils/ClassLoader.php';


$loader = new \utils\ClassLoader('src');
$loader->register();

use app\model\Pizza;

$Pizza1 = new Pizza('Stock','Margarita','12,5');

echo $Pizza1->name;



