<?php
session_start();

$mod = isset($_GET['act']) ? $_GET['act'] : 'home';
switch ($mod) {
    case 'home':
        require_once('controller/HomeController.php');
        $home_page = new HomeController();
        $home_page->list();
        include('view/header_footer/footer.php');   
}
?>