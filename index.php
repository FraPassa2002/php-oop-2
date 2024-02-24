<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once __DIR__.'/classes/Category.php';
    require_once __DIR__.'/classes/Product.php';
    
    $dogsCategory = new Category('Cani');
    $catsCategory = new Category('Gatti');


    $frisbee = new Product(null, 'Frisbee', 7.99, 30, 'Un bel frisbee', $dogsCategory);
