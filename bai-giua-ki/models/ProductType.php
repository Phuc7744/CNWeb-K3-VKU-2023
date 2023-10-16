<?php
class ProductType extends AbstractModel
{
    var $table = "product_type";
    public function insert($name)
    {
        $sql = "INSERT INTO product_type (name) values (?) ";
        $params_type = $this->createParamsType(PDO::PARAM_STR);
        return $this->bindParamsAndExcute($sql, $params_type, $name);
    }

    public function update($id, $name)
    {
        $sql = "UPDATE product_type SET name=? WHERE id=?";
        $params_type = $this->createParamsType(PDO::PARAM_STMT, PDO::PARAM_STR);
        return $this->bindParamsAndExcute($sql, $params_type, $name, $id);
    }


}
?>