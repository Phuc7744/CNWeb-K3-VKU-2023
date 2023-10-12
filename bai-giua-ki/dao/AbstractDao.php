<?php
require_once('../util/DbUtil.php');
abstract class AbtractDao
{
    var $conn;
    function __construct()
    {
        $this->conn = DbUtil::connectDb();
    }
}
?>