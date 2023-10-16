<?php
require_once('DB.php');
class AbstractModel
{
    var PDO $conn;
    var $table;

    function __construct()
    {
        $this->conn = DB::connect();
    }

    function excute($query)
    {
        $query = $this->conn->query($query);
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
    }

    function bindParamsAndExcute($query, $params_type, ...$params)
    {
        $stmt = $this->conn->prepare($query);
        for ($i = 0; $i < count($params); $i++) {
            $stmt->bindParam($i + 1, $params[$i], $params_type[$i]);
        }
        $stmt->execute();
        $result = $stmt->fetchAll();
        $stmt->closeCursor();
        return $result;
    }

    function bindParamAndExcute($query, $param_type, $param)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $param, $param_type);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $stmt->closeCursor();
        return $result;
    }

    function createParamsType(...$params)
    {
        return $params;
    }

    function findById($id)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE id = ?";
        return $this->bindParamAndExcute($sql, PDO::PARAM_INT, $id);
    }

    function deleteById($id)
    {
        $sql = "DELETE FROM " . $this->table . " WHERE id =?";
        return $this->bindParamAndExcute($sql, PDO::PARAM_INT, $id);
    }

    function getAll()
    {
        $sql = "SELECT * FROM " . $this->table;
        return $this->excute($sql);
    }

    function count()
    {
        $sql = "SELECT COUNT(id) FROM " . $this->table;
        return $this->excute($sql)[0][0];
    }
}
?>