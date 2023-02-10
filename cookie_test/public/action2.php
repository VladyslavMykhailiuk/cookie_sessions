<?php
session_start();
$prod = array();
$allProducts = array();
if(isset($_SESSION['products'])) {
    $allProducts = json_decode($_SESSION['products']);
}
$itemProd = $_POST['product'];
$allProducts[] = $itemProd;
$_SESSION['products'] = json_encode($allProducts);



if(isset($_SESSION['test1'])) {
    $prod = json_decode($_SESSION['test1']);
}
$item = $_POST['test1'];
$prod[] = $item;
$_SESSION['test1'] = json_encode($prod);
header('Location: http://127.0.0.1:8876/card.php');