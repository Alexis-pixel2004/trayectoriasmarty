<?php
require_once '../libs/Smarty.class.php';

$smarty = new Smarty\Smarty;

//$smarty->setTemplateDir('templates/');
//$smarty->setCompileDir('templates_c/');
//$smarty->setCacheDir('cache/');
//$smarty->setConfigDir('configs/');

//$smarty->testInstall();
$smarty->assign('titulo', 'Inicio - Sistema Academico');
$smarty->display('login.tpl');

?>