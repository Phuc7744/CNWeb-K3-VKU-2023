<?php 
interface ITypeDao {
    public static function getAllType();

    public static function addType(TypeModel $type);

    public static function deleteTypeById($id);

}
?>