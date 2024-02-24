<?php

require_once __DIR__.'/Product.php';

class PetBed extends Product {

    public $width;
    public $height;

    
    //costruttore
    public function __construct(
        $image,
        $name,
        $width,
        $height,
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
        $this->width = $width;
        $this->height = $height;

    }
    
}