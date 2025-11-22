<?php
session_start();
require_once '../../libs/Smarty.class.php';
require_once '../db/conexion.php';
require_once '../clases/Docente.php'; // corregido

$smarty = new Smarty\Smarty;
$smarty->setTemplateDir(__DIR__ . '/../templates/');
$smarty->setCompileDir(__DIR__ . '/../templates_c/');
$smarty->setCacheDir(__DIR__ . '/../cache/');
$smarty->setConfigDir(__DIR__ . '/../configs/');

$docenteModel = new Docente($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = trim($_POST['usuario'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($usuario) || empty($password)) {
        $smarty->assign("error", "Todos los campos son obligatorios.");
    } elseif (!filter_var($usuario, FILTER_VALIDATE_EMAIL)) {
        $smarty->assign("error", "El formato del email no es válido.");
    } else {
        $docente = $docenteModel->autenticar($usuario, $password);
        if ($docente) {
            $_SESSION['usuario'] = $docente['Usuario'];
            $_SESSION['nombre'] = $docente['Nombre'];
            $_SESSION['id_docente'] = $docente['IdDocente'];
            echo "Login exitoso. Redirigiendo...";
            header("Location: menu.php");
            
            exit; 
            
        } else {
            $smarty->assign("error", "Usuario o contraseña incorrectos.");
        }
    }
}

// Solo se muestra el login si no hubo redirección
$smarty->assign("titulo", "Login");
$smarty->display("login.tpl");
