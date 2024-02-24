<?php

class product
{
    //proprietà
    public $id;
    public $image;
    public $name;
    public $price;
    public $quantity;
    public $description;

    public $category;      // è un' associazione con la tabella categories

    //costruttore
    public function __construct(
        $image,
        $name,
        $price,
        $quantity,
        $description,
        $category       
    )
    {
        $this->image = $image;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
        $this->category = $category; 
    }
}