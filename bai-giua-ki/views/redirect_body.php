<?php
$redirect = isset($_GET['controller']) ? $_GET['controller'] : "home";
switch ($redirect) {
    case "home":
        require_once('home/index.php');
        break;
    case "manager":
        require_once('manager/index.php');
        break;
    default:
        break;
}
?>