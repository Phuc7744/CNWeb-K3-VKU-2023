<?php
require_once('DB.php');
class DB
{
    private const HOST = 'localhost';
    private const USER_NAME = 'root';
    private const PASSwORD = '';
    private const DB = 'fashion_shop';

    public static function connect()
    {
        $conn = new PDO("mysql:host=" . self::HOST . "; dbname=" . self::DB . "; charset=utf8", self::USER_NAME, self::PASSwORD);
        if ($conn) {
            return $conn;
        }
        echo "Connect db fail";
        exit();
    }
}
?>