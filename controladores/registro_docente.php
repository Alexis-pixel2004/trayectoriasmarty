<?php
require('../../libs/Smarty.class.php');
require('../db/conexion.php');
require('../clases/Docente.php');

$smarty = new Smarty\Smarty;
$smarty->setTemplateDir(__DIR__ . '/../templates/');
$smarty->setCompileDir(__DIR__ . '/../templates_c/');
$smarty->setCacheDir(__DIR__ . '/../cache/');
$smarty->setConfigDir(__DIR__ . '/../configs/');
$docenteModel = new Docente($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $especialidad = $_POST['especialidad'];

    if ($docenteModel->registrar($nombre, $apellido, $usuario, $password, $especialidad)) {
        $smarty->assign("mensaje", "Docente registrado correctamente ");
    } else {
        $smarty->assign("mensaje", "Error al registrar docente ");
    }
}

$smarty->display("registro.tpl");
?>
