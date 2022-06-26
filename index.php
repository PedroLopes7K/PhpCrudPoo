<?php

use App\Model\Product;

require_once 'vendor/autoload.php';


$product = new \App\Model\Product();
$product->setName('SAMSUNG J4');
$product->setDescription('Color BLACK, 24GB');


$productDao = new \App\Model\ProductDao();
$productDao->create($product);

$allProducts = $productDao->read();
