<?php

class User {
    protected string $name;
    protected string $email;
    protected bool $registered = false;
    protected array $cart;


    function __construct( string $_name, bool $_registered)
    {
        $this->name = $_name;
        $this->email = $_email;
        $this->registered = $_registered;
        $this->cart = $_cart;
    }

    public function discount() {
        if ($this->registered) {
            return 20;
        }
        else {
            return 0;
        }
    }

    public function addToCart($product) {
        $this->cart[] = $product;

    }



}



?>