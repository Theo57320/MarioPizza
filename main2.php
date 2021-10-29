<?php

echo"\nWelcome to MARIO PIZZA ! \n";

echo("\nEnter 1 : -for a custom pizza\nEnter 2 : -to see the pizza menu\nEnter 3 : -to cancel\n\n");

$number = (int)readline('Enter the number please :');
switch($number){
    case 1:
        echo ("\nWhat are the ingredients you want for your personalized pizza\n");
        break;
    case 2:
        echo("\nHere is the list of pizzas\n");
        break;
    case 3:
        exit;
    default:
        echo 'Incorrect number';
}

