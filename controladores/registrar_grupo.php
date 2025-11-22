<?php
session_start();
require_once '../db/conexion.php';
require_once '../clases/Grupo.php';
require_once '../clases/Grado.php';
require_once '../../libs/Smarty.class.php';

$smarty = new Smarty\Smarty;
$smarty->setTemplateDir(__DIR__ . '/../templates/');
$smarty->setCompileDir(__DIR__ . '/../templates_c/');
$smarty->setCacheDir(__DIR__ . '/../cache/');
$smarty->setConfigDir(__DIR__ . '/../configs/');

$idDocente = $_SESSION['id_docente'];


$gradoModel = new Grado($conn);
$grados = $gradoModel->listar();

// Pasar datos al template
$smarty->assign('grados', $grados);


$smarty->display('registrarGrupo.tpl');