<?php

namespace app\model;

class Pizza extends AbstractPizza
{
    protected $name,$price,$ingrediant;

    public function __construct($type,$name,$price){
        parent::__construct($type);
        $this->name = $name;
        $this->price = $price;
    }

    public function __toString()
    {
        return $this->type.", ".$this->name.", ".$this->price."\n";

    }
















}