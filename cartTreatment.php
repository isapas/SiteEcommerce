<?php
session_start();
require 'Service/manageCart.php';
require 'Model/function.php';
$products =getProducts();
$id = $_GET['id'] ;
$product = $products[$id];
AddToCart($product);
header('Location: cart.php');
    ?>
