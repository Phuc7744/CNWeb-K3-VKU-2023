<?php
$controller = isset($_GET['controller']) ? $_GET['controller'] : "home";
switch ($controller) {
    case "home":
        require_once('controllers/HomeController.php');
        break;
    case "manager":
        require_once('controllers/ManagerController.php');
        break;
    default:
        require_once('controllers/HomeController.php');
        break;
}
?>