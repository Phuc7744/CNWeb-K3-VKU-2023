<?php
class HomeController
{
    function __construct()
    {
    }

    public function list()
    {
        include_once('view/page/home.php');
    }
}
?>