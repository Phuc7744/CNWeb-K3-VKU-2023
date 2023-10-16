<?php
require_once('models/Shoes.php');
require_once('models/Brand.php');
require_once('models/ProductType.php');
$shoes_model = new Shoes();
$brand_model = new Brand();
$product_type_model = new ProductType();

$type = isset($_GET['type']) ? $_GET['type'] : "";
$action = isset($_GET['action']) ? $_GET['action'] : "";

switch ($type) {
    case 'brand':
        switch ($action) {
            case 'add':
                if (isset($_POST['add'])) {
                    $brand_model->insert($_POST['name'], $_POST['description']);
                    $isSuccess = true;
                }
                break;
            case 'update':
                if (isset($_POST['update'])) {
                    $brand_model->update($_GET['id'], $_POST['name'], $_POST['description']);
                    header('location: ?controller=manager&type=brand&action=list');
                }
                $brand_to_edit = isset($_GET['id']) ? $brand_model->findById($_GET['id'])[0] : null;
                break;
            case 'delete':
                if (isset($_POST['delete'])) {
                    $brand_model->deleteById($_POST['id']);
                    header('location: ?controller=manager&type=brand&action=list');
                }
                break;
            case 'list':
                $brand_list = $brand_model->getAll();
                break;
        }
        break;
    case 'product_type':
        switch ($action) {
            case 'add':
                if (isset($_POST['add'])) {
                    $product_type_model->insert($_POST['name']);
                    $isSuccess = true;
                }
                break;
            case 'update':
                if (isset($_POST['update'])) {
                    echo $_GET['id'];
                    $product_type_model->update($_GET['id'], $_POST['name']);
                    header('location: ?controller=manager&type=product_type&action=list');
                }
                $product_type_to_edit = isset($_GET['id']) ? $product_type_model->findById($_GET['id'])[0] : null;
                break;
            case 'delete':
                if (isset($_POST['delete'])) {
                    $product_type_model->deleteById($_POST['id']);
                    header('location: ?controller=manager&type=product_type&action=list');
                }
                break;
            case 'list':
                $product_type_list = $product_type_model->getAll();
                break;
        }
        break;
    case 'shoes':
        switch ($action) {
            case 'add':
                if (isset($_POST['add'])) {
                    $brand_option = isset($_POST['brand']) ? $_POST['brand'] : false;
                    $product_type_option = isset($_POST['product_type']) ? $_POST['product_type'] : false;
                    if ($product_type_option && $brand_option) {
                        if (isset($_FILES['img'])) {
                            $savePath = $shoes_model->generateImgLink($brand_option, $product_type_option, pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION));
                            if (move_uploaded_file($_FILES['img']['tmp_name'], $savePath)) {
                                $shoes_model->insert($_POST['name'], $_POST['price'], $brand_option, $product_type_option, $_POST['description'], $savePath);
                                $isSuccess = true;
                            }
                        }
                    }
                }

                $brand_list = $brand_model->getAll();
                $product_type_list = $product_type_model->getAll();
                break;
            case 'update':
                if (isset($_POST['update'])) {
                    $brand_option = isset($_POST['brand']) ? $_POST['brand'] : false;
                    $product_type_option = isset($_POST['product_type']) ? $_POST['product_type'] : false;

                    if (isset($_FILES['img']['tmp_name'])) {
                        if ($_FILES['img']['size'] != 0) {
                            unlink($_POST['img_url']);
                            move_uploaded_file($_FILES['img']['tmp_name'], $_POST['img_url']);
                        }

                    }
                    $shoes_model->updateById($_GET['id'], $_POST['name'], $_POST['price'], $brand_option, $product_type_option, $_POST['description']);
                    header('location: ?controller=manager&type=shoes&action=list');
                }
                $shoes_to_edit = isset($_GET['id']) ? $shoes_model->findById($_GET['id'])[0] : null;
                $brand_list = $brand_model->getAll();
                $product_type_list = $product_type_model->getAll();
                break;
            case 'delete':
                if (isset($_POST['delete'])) {
                    if (unlink($shoes_model->getImgUrlById($_POST['id']))) {
                        $shoes_model->deleteById($_POST['id']);
                        header('location: ?controller=manager&type=shoes&action=list');
                    }
                }
                break;
            case 'list':
                $shoes_list = $shoes_model->getAllData();
                break;
        }
        break;
}
require_once('views/index.php');
?>