<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
require_once '../db/conexion.php';
require_once '../clases/Grupo.php';
require_once '../../libs/Smarty.class.php';

$smarty = new Smarty\Smarty;
$smarty->setTemplateDir(__DIR__ . '/../templates/');
$smarty->setCompileDir(__DIR__ . '/../templates_c/');
$smarty->setCacheDir(__DIR__ . '/../cache/');
$smarty->setConfigDir(__DIR__ . '/../configs/');

$grupoModel = new Grupo($conn);
$idDocente  = $_SESSION['id_docente'] ?? null;

if ($idDocente) {
    $grupos = $grupoModel->listarPorDocente($idDocente);
    $smarty->assign('grupos', $grupos);
} else {
    $smarty->assign('grupos', []);
}

$smarty->display('listarGrupos.tpl');
