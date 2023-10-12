<?php
require_once('AbstractDao.php');
class ProductDao extends AbtractDao
{
    public static function getAllProduct()
    {
        $sql = "select * from product";
        $query = $this->conn->query($sql);
    }
}
?>