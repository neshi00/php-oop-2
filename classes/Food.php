<?php

require_once __DIR__ . "/Product.php";

class Food extends Product {

    protected string $expirationDate;
    protected string $ingredients;


    public function __construct(string $_description, float $_price, string $_expirationDate )
    {
        parent :: __construct($_description, $_price);

        $this->expirationDate = $_expirationDate;
      
  
    }

    public function getExpirationDate() {
        return $this->expirationDate;
    }

    public function getIngredients() {
        return $this->ingredients;
    }

    public function setExpirationDate($expirationDate) {
        $this->expirationDate = $expirationDate;
    }

    public function setIngredients($ingredients) {
        $this->ingredients = $ingredients;
    }

};


?>