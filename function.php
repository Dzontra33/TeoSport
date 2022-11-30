<?php

//require MySQL Connection
require('database/DBController.php');

//require Product class
require('database/Product.php');

//require Cart class
require('database/Cart.php');

//require Brand class
require('database/Brand.php');

//DBController object
$db = new DBController();

//Product object
$product = new Product($db);
$product_shuffle = $product->getData();

//Category object
$brand = new Brand($db);
$brand_shuffle = $brand->getData();

//cart object
$Cart = new cart($db);










?>

