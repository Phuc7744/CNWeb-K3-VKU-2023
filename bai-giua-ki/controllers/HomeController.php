<?php
require_once('models/Shoes.php');
require_once('models/Brand.php');
require_once('models/ProductType.php');
$shoes_model = new Shoes();
$brand_model = new Brand();
$product_type_model = new ProductType();

$shoes_list = $shoes_model->getAllData();
$brand_list = $brand_model->getAll();
$product_type_list = $product_type_model->getAll();

if (isset($_GET['brand'])) {
    $shoes_list = $shoes_model->getAllDataByBrandId($_GET['brand']);
}
if (isset($_GET['product_type'])) {
    $shoes_list = $shoes_model->getAllDataByTypeId($_GET['product_type']);
}
require_once('views/index.php');
?>