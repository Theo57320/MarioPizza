<?php

namespace app\model;

Abstract class AbstractPizza
{
    protected $type;

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







}