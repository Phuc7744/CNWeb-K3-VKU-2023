<?php
class Type extends AbtractModel
{
    private $name;

    function __construct()
    {

    }

    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        $this->name = $name;
    }
}
?>