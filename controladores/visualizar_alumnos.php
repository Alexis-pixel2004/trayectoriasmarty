<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
require_once '../db/conexion.php';
require_once '../clases/Grupo.php';
require('../../libs/Smarty.class.php');

$smarty = new Smarty\Smarty;
$smarty->setTemplateDir(__DIR__ . '/../templates/');
$smarty->setCompileDir(__DIR__ . '/../templates_c/');
$smarty->setCacheDir(__DIR__ . '/../cache/');
$smarty->setConfigDir(__DIR__ . '/../configs/');
// Instancia del modelo de grupos
$grupoModel = new Grupo($conn);

// Obtenemos el docente de la sesión
$idDocente = $_SESSION['id_docente'] ?? null;

// Listamos los grupos del docente
$grupos = $grupoModel->listarPorDocente($idDocente);

// Pasamos los grupos a Smarty
$smarty->assign('grupos', $grupos);

// Renderizamos la vista
$smarty->display('listarAlumnosPorGrupo.tpl');
