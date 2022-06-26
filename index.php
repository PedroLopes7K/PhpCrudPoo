<?php

use App\Model\Product;

require_once 'vendor/autoload.php';


$newProduct = new \App\Model\Product();
$newProduct->SetId(6);
$newProduct->SetName('TENIS NIKE');
$newProduct->SetDescription('Color Red, 42');


$productDao = new \App\Model\ProductDao();
// $productDao->Create($newProduct);
$productDao->Update($newProduct);
$allProducts = $productDao->Read();
// var_dump($allProducts);
foreach ($allProducts as $product) {
  echo "<h3> Product: " . $product['name'] . "</h2> ";
  echo "<span> Description: " . $product['description'] . "</span> <br>";
  echo "<hr>";
}

$productDao->Delete($newProduct->GetId());
