<?php 
require 'util/DbUtil.php';
require 'dao/TypeDao.php';
require 'dao/ProductDao.php';
$product_types = TypeDao::getAllType();
$product_lists = array();

if(count($product_types)>0) {
    foreach($product_types as $type) {
        array_push($product_lists, array('type'     => strval($type['name']), 
                                         'products' => ProductDao::getProductByType($type['name'])));
    }
}
?>
