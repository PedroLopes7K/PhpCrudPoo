<?php

use App\Model\Product;

require_once 'vendor/autoload.php';


$newProduct = new \App\Model\Product();
$newProduct->setId(6);
$newProduct->setName('TENIS NIKE');
$newProduct->setDescription('Color Red, 42');


$productDao = new \App\Model\ProductDao();
// $productDao->create($newProduct);
$productDao->update($newProduct);
$allProducts = $productDao->read();
// var_dump($allProducts);
foreach ($allProducts as $product) {
  echo "<h3> Product: " . $product['name'] . "</h2> ";
  echo "<span> Description: " . $product['description'] . "</span> <br>";
  echo "<hr>";
}

$productDao->delete($newProduct->getId());
