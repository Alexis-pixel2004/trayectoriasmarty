<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
require_once '../db/conexion.php';
require_once '../clases/Grupo.php';

$grupoModel = new Grupo($conn);

$idGrupo     = $_POST['IdGrupo'] ?? null;
$nombreGrupo = trim($_POST['NombreGrupo'] ?? '');
$idGrado     = $_POST['IdGrado'] ?? null;
$ciclo       = trim($_POST['CicloEscolar'] ?? '');

if ($idGrupo && $nombreGrupo && $idGrado && $ciclo) {
    if ($grupoModel->editar($idGrupo, $nombreGrupo, $idGrado, $ciclo)) {
        echo "Grupo actualizado correctamente";
    } else {

        echo "Error al actualizar el grupo";
    }
} else {
    
    echo "Datos incompletos";
}
