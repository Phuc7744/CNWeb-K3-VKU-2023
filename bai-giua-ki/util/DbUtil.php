<?php
class DbUtil
{
    const HOST = "localhost";
    const DB = "fashion_shop";
    const USER_NAME = "root";
    const PASSWORD = "";
    const PORT = "3306";

    public static function connectDb() : PDO
    {
        $dsn = "mysql:host=" . self::HOST . ";" .
            "dbname=" . self::DB . ";" .
            "port=" . self::PORT;
        try {
            $db = new PDO($dsn, self::USER_NAME, self::PASSWORD);
            echo "Connected successfully";
            return $db;
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}
?>