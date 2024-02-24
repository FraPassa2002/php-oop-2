<?php

require_once __DIR__.'/Product.php';

class Food extends Product {

    public $expiration;


    //costruttore
    public function __construct(
        $image,
        $name,
        $expiration,
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
        $this->expiration = $expiration;
        
    }

    
}