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

    public function addIngredient($ingredient,&$list){
        array_push($this->ingredients, $ingredient);
        if ($this->type='recipe'){
            $list[$this->name]['ingredients']=$this->ingredients;
        }
    }



    public function listIngredients()
    {
        print_r($this->ingredients);
    }
    public function removeIngredients($ligne,&$list){
        unset($this->ingredients[$ligne]);
        if ($this->type='recipe'){
            $list[$this->name]['ingredients']=$this->ingredients;
        }
    }







}