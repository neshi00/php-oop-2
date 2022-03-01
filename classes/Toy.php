<?php

require_once __DIR__ . "/Product.php";

class Toy extends Product {
    protected string $material;


    public function __construct(string $_description, float $_price, $_material)
    {
        parent :: __construct($_description, $_price);

        $this->material = $_material;

    }

    public function getMaterial() {
        return $this->material;
    }

    public function setMaterial($material) {
        $this->material = $material;
    }



};



?>