<?php
session_start();
require_once '../db/conexion.php';
require_once '../clases/Grupo.php';
require_once '../../libs/Smarty.class.php';

$smarty = new Smarty\Smarty;
$smarty->setTemplateDir(__DIR__ . '/../templates/');
$smarty->setCompileDir(__DIR__ . '/../templates_c/');
$smarty->setCacheDir(__DIR__ . '/../cache/');
$smarty->setConfigDir(__DIR__ . '/../configs/');

// Obtenemos los grupos del docente logueado
$grupoModel = new Grupo($conn);
$idDocente = $_SESSION['id_docente'] ?? null;

$grupos = $grupoModel->listarPorDocente($idDocente);

// Pasamos los grupos a Smarty
$smarty->assign('grupos', $grupos);
$smarty->display('menuAlumnos.tpl');
