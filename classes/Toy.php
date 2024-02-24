<?php

require_once __DIR__.'/Product.php';

class Toy extends Product {

    public $material;


    //costruttore
    public function __construct(
        $image,
        $name,
        $material,
        $price,
        $quantity,
        $description,
        $category       
    )
    {
        parent:: __construct(
            $image,
            $name,
            $price,
            $quantity,
            $description,
            $category  
        );
        $this->material = $material;
        
    }
}