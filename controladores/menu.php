<?php
require('../../libs/Smarty.class.php');
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
$smarty = new Smarty\Smarty;
$smarty->setTemplateDir(__DIR__ . '/../templates/');
$smarty->setCompileDir(__DIR__ . '/../templates_c/');
$smarty->setCacheDir(__DIR__ . '/../cache/');
$smarty->setConfigDir(__DIR__ . '/../configs/');
$smarty->display("menu.tpl");
?>