<?php

include __DIR__.'/../vendor/autoload.php';

use Factory\model\ProductModel as ProductModel;

$product = new ProductModel();

echo "<pre>";
print_r($product->getAllProduct());