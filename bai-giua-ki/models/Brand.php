<?php
require_once('AbstractModel.php');
class Brand extends AbstractModel
{
    var $table = "brand";
    public function insert($name, $description)
    {
        $sql = "INSERT INTO brand (name, description) values (?, ?) ";
        $params_type = $this->createParamsType(PDO::PARAM_STR, PDO::PARAM_STR);
        return $this->bindParamsAndExcute($sql, $params_type, $name, $description);
    }

    public function update($id, $name, $description)
    {
        $sql = "UPDATE brand SET name=?, description=? WHERE id=?";
        $params_type = $this->createParamsType(PDO::PARAM_STMT, PDO::PARAM_STR, PDO::PARAM_INT);
        return $this->bindParamsAndExcute($sql, $params_type, $name, $description, $id);
    }
}
?>