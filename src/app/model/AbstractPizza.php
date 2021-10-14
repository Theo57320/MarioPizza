<?php

namespace app\model;

Abstract class AbstractPizza
{
    protected $type,$ingredients=[];

    public function __construct($type){
        $this->type = $type;
    }


    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function addIngredient($ingredient)
    {
        array_push($this->ingredients, $ingredient) ;
    }

    public function listIngredients()
    {
        print_r($this->ingredients);
    }
    public function removeIngredients($ligne){
        unset($this->ingredients[$ligne]);
    }







}