<?php

require_once __DIR__ . "/Product.php";

class Toy extends Product {
    protected string $material;


    public function __construct(string $_description, string $_brand, int $_price, $_material)
    {
        parent :: __construct($_description, $_brand, $_price);

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