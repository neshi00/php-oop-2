<?php

class Product {

    protected string $description;
    protected string $brand;
    protected float $price;


    function __construct(string $_description, float $_price)
    {
        $this-> description = $_description;
        $this-> price = $_price;
        
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }







};



?>