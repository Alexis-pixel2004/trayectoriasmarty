<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
require_once '../db/conexion.php';
require_once '../clases/Grupo.php';

$grupoModel = new Grupo($conn);

$idGrupo   = $_POST['IdGrupo'] ?? null;
$idDocente = $_SESSION['id_docente'] ?? null;

if ($idGrupo && $idDocente) {
    if ($grupoModel->eliminar($idGrupo, $idDocente)) {
        echo "Grupo eliminado correctamente";
    } else {
        echo "Error al eliminar el grupo o no tienes permisos";
    }
} else {
    echo "Datos incompletos";
}
