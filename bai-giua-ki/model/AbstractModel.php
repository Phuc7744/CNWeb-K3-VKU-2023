<?php
abstract class AbtractModel
{
    private $id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}
?>