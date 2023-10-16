<?php
require_once('AbstractModel.php');
class Shoes extends AbstractModel
{
    var $table = "shoes";

    public function insert($name, $price, $brand_id, $product_type_id, $description, $img_url = "")
    {
        $sql = "INSERT INTO shoes (name, price, brand_id, product_type_id, description, img_url) values (?, ?, ?, ?, ?, ?)";
        $params_type = $this->createParamsType(PDO::PARAM_STR, PDO::PARAM_STR, PDO::PARAM_INT, PDO::PARAM_INT, PDO::PARAM_STR, PDO::PARAM_STR);
        $this->bindParamsAndExcute($sql, $params_type, $name, $price, $brand_id, $product_type_id, $description, $img_url);
    }

    public function updateById($id, $name, $price, $brand_id, $product_type_id, $description)
    {
        $sql = "UPDATE shoes SET name=?, price=?, brand_id=?, product_type_id=?, description=? WHERE id=?";
        $params_type = $this->createParamsType(PDO::PARAM_STR, PDO::PARAM_STR, PDO::PARAM_INT, PDO::PARAM_INT, PDO::PARAM_STR, PDO::PARAM_INT);
        $this->bindParamsAndExcute($sql, $params_type, $name, $price, $brand_id, $product_type_id, $description, $id);
    }

    public function findByProductTypeId($id)
    {
        $sql = "SELECT * FROM shoes WHERE product_type_id = ?";
        return $this->bindParamAndExcute($sql, PDO::PARAM_INT, $id);
    }

    public function findByBrandId($id)
    {
        $sql = "SELECT * FROM shoes WHERE brand_id = ?";
        return $this->bindParamAndExcute($sql, PDO::PARAM_INT, $id);
    }

    public function getAllData()
    {
        $sql = "SELECT s.id, s.name, s.price, b.name AS 'brand', t.name AS 'type', s.description, s.img_url " .
            "FROM shoes s, brand b, product_type t " .
            "WHERE s.brand_id = b.id AND s.product_type_id = t.id";
        return $this->excute($sql);
    }

    public function getAllDataByTypeId($type_id)
    {
        $sql = "SELECT s.id, s.name, s.price, b.name AS 'brand', t.name AS 'type', s.description, s.img_url " .
            "FROM shoes s, brand b, product_type t " .
            "WHERE s.brand_id = b.id AND s.product_type_id = t.id AND t.id = ?";
        return $this->bindParamAndExcute($sql, PDO::PARAM_INT, $type_id);
    }

    public function getAllDataByBrandId($brand_id)
    {
        $sql = "SELECT s.id, s.name, s.price, b.name AS 'brand', t.name AS 'type', s.description, s.img_url " .
            "FROM shoes s, brand b, product_type t " .
            "WHERE s.brand_id = b.id AND s.product_type_id = t.id AND b.id = ?";
        return $this->bindParamAndExcute($sql, PDO::PARAM_INT, $brand_id);
    }

    public function getImgUrlById($id)
    {
        $sql = "SELECT img_url FROM shoes WHERE id = ?";
        return $this->bindParamAndExcute($sql, PDO::PARAM_INT, $id)[0]['img_url'];
    }

    public function generateImgLink($brand_id, $product_type_id, $postfix)
    {
        return "public/img/shoes/" . $brand_id . "_" . $product_type_id . "_" . $this->count() . "." . $postfix;
    }
}
?>